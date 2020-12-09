<?php

use YOOtheme\Util\Collection;
use YOOtheme\Util\File;
use YOOtheme\Util\Str;

$config = [

    'name' => 'yootheme/joomla-theme',

    'main' => 'YOOtheme\\Theme\\Joomla',

    'inject' => [

        'db' => 'app.db',
        'url' => 'app.url',
        'view' => 'app.view',
        'admin' => 'app.admin',
        'styles' => 'app.styles',
        'scripts' => 'app.scripts',
        'sections' => 'app.view.sections',
        'customizer' => 'theme.customizer',
        'conf' => 'JFactory::getConfig',
        'document' => 'JFactory::getDocument',
        'language' => 'JFactory::getLanguage',
        'application' => 'JFactory::getApplication',

    ],

    'routes' => function ($routes) {

        $routes->get('/customizer', function ($return = false, $response) {

            $this->app->trigger('theme.admin', [$this->theme]);
            $this->customizer->mergeData([
                'config' => $this->theme->config->all(),
                'title' => $this->theme->title,
                'default' => $this->theme->default,
                'return' => $return ?: $this->app->url('administrator/index.php'),
            ]);

            JHtml::_('behavior.keepalive');
            JHtml::_('bootstrap.tooltip');

            return $this->document
                ->setTitle("Website Builder - {$this->conf->get('sitename')}")
                ->addFavicon(JUri::root(true).'/administrator/templates/isis/favicon.ico')
                ->render(false, [
                    'file' => 'component.php',
                    'template' => 'system',
                ]);
        });

        $routes->post('/customizer', function ($config, $response) {

            $user = JFactory::getUser();

            if (!$user->authorise('core.edit', 'com_templates')) {
                $this->app->abort(403, 'Insufficient User Rights.');
            }

            $config = new Collection($config);
            $this->app->trigger('theme.save', [$config]);

            // alter custom_data type to MEDIUMTEXT only in MySQL database
            if (strpos($this->db->driver, 'mysql') !== false) {
                foreach (['extensions' => 'custom_data', 'template_styles' => 'params'] as $table => $field) {

                    $query = "SHOW FIELDS FROM @{$table} WHERE Field = '{$field}'";
                    $alter = "ALTER TABLE @{$table} CHANGE `{$field}` `{$field}` MEDIUMTEXT NOT NULL";

                    if ($this->db->fetchObject($query)->Type == 'text') {
                        $this->db->executeQuery($alter);
                    }
                }
            }

            // update template style params
            $params = array_replace($this->theme->params->toArray(), ['config' => json_encode($config)]);
            $this->db->update('@template_styles', ['params' => json_encode($params)], ['id' => $this->theme->id]);

            return 'success';
        });

        $routes->get('/finder', function ($response) {

            $base = JPATH_ADMINISTRATOR.'/components/com_media';
            JLoader::register('MediaHelper', "{$base}/helpers/media.php");
            define('COM_MEDIA_BASE', JPATH_ROOT.'/'.JComponentHelper::getParams('com_media')->get('file_path'));

            $files = [];

            foreach (JControllerLegacy::getInstance('Media', ['base_path' => $base])->getModel('list')->getList() as $type => $items) {
                foreach ($items as $item) {
                    $files[] = [
                        'name' => $item->get('name'),
                        'path' => $item->get('path_relative'),
                        'url' => strtr(ltrim(substr($item->get('path'), strlen(JPATH_ROOT)), '/'), '\\', '/'),
                        'type' => $type == 'folders' ? 'folder' : 'file',
                        'size' => $item->get('size') ? JHtml::_('number.bytes', $item->get('size')) : 0,
                    ];
                }
            }

            return $response->withJson($files);
        });

        $routes->post('/finder/rename', function ($oldFile, $newName, $response) {

            $user = JFactory::getUser();
            if (!$user->authorise('core.create', 'com_media') || !$user->authorise('core.delete', 'com_media')) {
                $this->app->abort(403, 'Insufficient User Rights.');
            }

            $extension = (new File($newName))->getExtension();
            $params = JComponentHelper::getParams('com_media');
            $allowed = $params->get('upload_extensions').',svg';

            $isValidFilename = !empty($newName)
                && (empty($extension) || in_array($extension, explode(',', $allowed)))
                && (defined('PHP_WINDOWS_VERSION_MAJOR')
                    ? !preg_match('#[\\/:"*?<>|]#', $newName)
                    : strpos($newName, '/') === false);

            if (!$isValidFilename) {
                $this->app->abort(400, 'Invalid file name.');
            }

            $root = File::normalizePath(JPATH_ROOT.'/'.$params->get('file_path'));
            $oldFile = File::normalizePath(JPATH::clean("{$root}/{$oldFile}"));
            $path = dirname($oldFile);
            $newPath = File::normalizePath("{$path}/{$newName}");

            if (!Str::startsWith($path, $root) || $path !== dirname($newPath)) {
                $this->app->abort(400, 'Invalid path.');
            }

            if (!JFile::move($oldFile, $newPath)) {
                throw new Exception('Error writing file.');
            }

            return $response->withJson('Successfully renamed.');
        });

    },

    'events' => [

        'init' => function ($app) {

            $app['kernel']->addMiddleware(function ($request, $response, $next) {

                $user = \JFactory::getUser();

                // no cache
                $response = $response->withHeader('Expires', 'Mon, 1 Jan 2001 00:00:00 GMT');
                $response = $response->withHeader('Cache-Control', 'no-cache, must-revalidate, max-age=0');

                // check user permissions
                if (!$request->getAttribute('allowed') && !$user->authorise('core.edit', 'com_templates') && !$user->authorise('core.edit', 'com_content')) {
                    $this->app->abort(403, 'Insufficient User Rights.');
                }

                return $next($request, $response);
            });

            $app->trigger('theme.init', [$this->theme]);
        },

        'theme.init' => [function ($theme) {

            // Deprecated Blog settings
            $params = $theme->params;

            if (!$params->exists('config.post.image_margin')) {

                $params = new Collection($params->toArray());

                $params->set('config.post.title_margin', 'large');
                $params->set('config.blog.title_margin', 'large');

                if ($params->get('config.post.content_width') === true) {
                    $params->set('config.post.content_width', 'small');
                }

                if ($params->get('config.post.content_width') === false) {
                    $params->set('config.post.content_width', '');
                }

                if ($params->get('config.post.header_align') === true) {
                    $params->set('config.blog.header_align', 1);
                }

            }

            // set defaults and config
            $theme->merge($this->config['defaults'], true);
            $theme->merge($params->get('config', []), true);

        }, -5],

        'theme.site' => function ($theme) {

            $custom = $theme->get('custom_js') ?: '';

            if ($theme->get('jquery') || strpos($custom, 'jQuery') !== false) {
                JHtml::_('jquery.framework');
            }

            if ($custom) {
                if (stripos(trim($custom), '<script') === 0) {
                    $this->document->addCustomTag($custom);
                } else {
                    $this->document->addCustomTag("<script>try { {$custom} } catch (e) { console.error('Custom Theme JS Code: ', e); }</script>");
                }
            }

            // fix markup after email cloaking
            if (JPluginHelper::isEnabled('content', 'emailcloak')) {

                $cloak = <<<'EOD'
document.addEventListener('DOMContentLoaded', function() {
    Array.prototype.slice.call(document.querySelectorAll('a span[id^="cloak"]')).forEach(function(span) {
        span.innerText = span.textContent;
    });
});
EOD;

                $this->scripts->add('emailcloak', $cloak, 'theme-style', 'string');

            }

        },

        'theme.admin' => function ($theme) {

            $user = \JFactory::getUser();

            if (!$user->authorise('core.admin', 'com_plugins')) {
                $theme->modules->get('yootheme/settings')->config->remove('fields.settings.items.api-key');
            }

            // can Access Administration Interface ?
            if (!$user->authorise('core.manage', 'com_modules')) {
                $this->customizer->removeSection('joomla-modules');
            }

            if (!$user->authorise('core.manage', 'com_menus')) {
                $this->customizer->removeSection('joomla-menus');
            }

        },

        'view' => function ($app) {

            if ($app['admin'] || $this->theme->isCustomizer) {
                return;
            }

            if ($css = $this->theme->get('css')) {
                $this->styles->add('theme-inline', preg_replace('/[\r\n\t]+/', ' ', $css), [], 'string');
            }

        },

    ],

    'config' => [

        'panels' => [

            'advanced' => [
                'fields' => [

                    'media_folder' => [
                        'label' => 'Media Folder',
                        'description' => 'This folder stores images that you download when using layouts from the YOOtheme Pro library. It\'s located inside the Joomla images folder.',
                        'type' => 'text',
                    ],

                    'search_module' => [
                        'label' => 'Search Module',
                        'description' => 'Select the search module.',
                        'type' => 'select',
                        'options' => [
                            'Search' => 'mod_search',
                            'Smart Search' => 'mod_finder',
                        ],
                    ],

                ],
            ],

            'system-post' => [
                'title' => 'Post',
                'width' => 400,
                'fields' => [

                    'post.width' => [
                        'label' => 'Width',
                        'description' => 'Set the post width. The image and content can\'t expand beyond this width.',
                        'type' => 'select',
                        'options' => [
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Default' => '',
                            'Large' => 'large',
                            'Expand' => 'expand',
                            'None' => 'none',
                        ],
                    ],

                    'post.padding' => [
                        'label' => 'Padding',
                        'description' => 'Set the vertical padding.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Large' => 'large',
                            'XLarge' => 'xlarge',
                        ],
                    ],

                    'post.padding_remove' => [
                        'type' => 'checkbox',
                        'text' => 'Remove top padding',
                    ],

                    'post.content_width' => [
                        'label' => 'Content Width',
                        'description' => 'Set an explicit content width which doesn\'t affect the image or inherit the post width.',
                        'type' => 'select',
                        'options' => [
                            'Auto' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                        ],
                        'enable' => 'post.width != "xsmall"',
                    ],

                    'post.image_margin' => [
                        'label' => 'Image Margin',
                        'description' => 'Set the top margin if the image is aligned between the title and the content. Define the image position in the <a href="index.php?option=com_config&view=component&component=com_content#editinglayout">Editing Layout</a> settings in Joomla.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.image_dimension' => [

                        'type' => 'grid',
                        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.',
                        'fields' => [

                            'post.image_width' => [
                                'label' => 'Image Width',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                            'post.image_height' => [
                                'label' => 'Image Height',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                        ],

                    ],

                    'post.header_align' => [
                        'label' => 'Alignment',
                        'description' => 'Align the title and meta text.',
                        'type' => 'checkbox',
                        'text' => 'Center the title and meta text',
                    ],

                    'post.title_margin' => [
                        'label' => 'Title Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.meta_margin' => [
                        'label' => 'Meta Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.meta_style' => [
                        'label' => 'Meta Style',
                        'description' => 'Display the meta text in a sentence or a horizontal list.',
                        'type' => 'select',
                        'options' => [
                            'List' => 'list',
                            'Sentence' => 'sentence',
                        ],
                    ],

                    'post.content_margin' => [
                        'label' => 'Content Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'post.content_dropcap' => [
                        'label' => 'Drop Cap',
                        'description' => 'Set a large initial letter that drops below the first line of the first paragraph.',
                        'type' => 'checkbox',
                        'text' => 'Show drop cap',
                    ],

                ],
            ],

            'system-blog' => [
                'title' => 'Blog',
                'width' => 400,
                'fields' => [

                    'blog.width' => [
                        'label' => 'Width',
                        'description' => 'Set the blog width.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'Small' => 'small',
                            'Large' => 'large',
                            'Expand' => 'expand',
                        ],
                    ],

                    'blog.padding' => [
                        'label' => 'Padding',
                        'description' => 'Set the vertical padding.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'XSmall' => 'xsmall',
                            'Small' => 'small',
                            'Large' => 'large',
                            'XLarge' => 'xlarge',
                        ],
                    ],

                    'blog.column_gutter' => [
                        'label' => 'Columns',
                        'description' => 'Define the number of columns in the <a href="index.php?option=com_config&view=component&component=com_content#blog_default_parameters">Blog/Featured Layout</a> settings in Joomla.',
                        'type' => 'checkbox',
                        'text' => 'Large gutter',
                    ],

                    'blog.column_breakpoint' => [
                        'label' => 'Breakpoint',
                        'description' => 'Set the breakpoint from which grid cells will stack.',
                        'type' => 'select',
                        'options' => [
                            'Small (Phone Landscape)' => 's',
                            'Medium (Tablet Landscape)' => 'm',
                            'Large (Desktop)' => 'l',
                            'X-Large (Large Screens)' => 'xl',
                        ],
                    ],

                    'blog.grid_masonry' => [
                        'label' => 'Masonry',
                        'description' => 'The masonry effect creates a layout free of gaps even if grid cells have different heights. ',
                        'type' => 'checkbox',
                        'text' => 'Enable masonry effect',
                    ],

                    'blog.grid_parallax' => [
                        'label' => 'Parallax',
                        'description' => 'The parallax effect moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels.',
                        'type' => 'range',
                        'attrs' => [
                            'min' => 0,
                            'max' => 600,
                            'step' => 10,
                        ],
                    ],

                    'blog.image_margin' => [
                        'label' => 'Image Margin',
                        'description' => 'Set the top margin if the image is aligned between the title and the content. Define the image position in the <a href="index.php?option=com_config&view=component&component=com_content#editinglayout">Editing Layout</a> settings in Joomla.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.image_dimension' => [

                        'type' => 'grid',
                        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.',
                        'fields' => [

                            'blog.image_width' => [
                                'label' => 'Image Width',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                            'blog.image_height' => [
                                'label' => 'Image Height',
                                'width' => '1-2',
                                'attrs' => [
                                    'placeholder' => 'auto',
                                    'lazy' => true,
                                ],
                            ],

                        ],

                    ],

                    'blog.header_align' => [
                        'label' => 'Alignment',
                        'description' => 'Align the title and meta text as well as the continue reading button.',
                        'type' => 'checkbox',
                        'text' => 'Center the title, meta text and button',
                    ],

                    'blog.title_style' => [
                        'label' => 'Title Style',
                        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
                        'type' => 'select',
                        'options' => [
                            'Default' => '',
                            'H1' => 'h1',
                            'H2' => 'h2',
                            'H3' => 'h3',
                            'H4' => 'h4',
                        ],
                    ],

                    'blog.title_margin' => [
                        'label' => 'Title Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.meta_margin' => [
                        'label' => 'Meta Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.content_margin' => [
                        'label' => 'Content Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.content_align' => [
                        'label' => 'Content Alignment',
                        'description' => 'This option applies to the blog overview and not to single posts.',
                        'type' => 'checkbox',
                        'text' => 'Center the content',
                    ],

                    'blog.content_length' => [
                        'label' => 'Content Length',
                        'description' => 'Limit the content length to a number of characters. All HTML elements will be stripped.',
                        'type' => 'number',
                    ],

                    'blog.button_style' => [
                        'label' => 'Button',
                        'description' => 'Select a style for the continue reading button.',
                        'type' => 'select',
                        'options' => [
                            'Default' => 'default',
                            'Primary' => 'primary',
                            'Secondary' => 'secondary',
                            'Danger' => 'danger',
                            'Text' => 'text',
                        ],
                    ],

                    'blog.button_margin' => [
                        'label' => 'Button Margin',
                        'description' => 'Set the top margin.',
                        'type' => 'select',
                        'options' => [
                            'Small' => 'small',
                            'Default' => 'default',
                            'Medium' => 'medium',
                            'Large' => 'large',
                            'X-Large' => 'xlarge',
                            'None' => 'remove',
                        ],
                    ],

                    'blog.navigation' => [
                        'label' => 'Navigation',
                        'description' => 'Use a numeric pagination or previous/next links to move between blog pages.',
                        'type' => 'select',
                        'options' => [
                            'Pagination' => 'pagination',
                            'Previous/Next' => 'previous/next',
                        ],
                    ],

                    'blog.pagination_startend' => [
                        'type' => 'checkbox',
                        'text' => 'Show Start/End links',
                        'show' => 'blog.navigation == "pagination"',
                    ],

                ],

            ],

        ],

        'defaults' => [

            'post' => [

                'width' => '',
                'padding' => '',
                'content_width' => '',
                'image_margin' => 'medium',
                'image_width' => '',
                'image_height' => '',
                'header_align' => 0,
                'title_margin' => 'default',
                'meta_margin' => 'default',
                'meta_style' => 'sentence',
                'content_margin' => 'medium',
                'content_dropcap' => 0,

            ],

            'blog' => [

                'width' => '',
                'padding' => '',
                'column_gutter' => 0,
                'column_breakpoint' => 'm',
                'image_margin' => 'medium',
                'image_width' => '',
                'image_height' => '',
                'header_align' => 0,
                'title_style' => '',
                'title_margin' => 'default',
                'meta_margin' => 'default',
                'content_margin' => 'medium',
                'content_align' => 0,
                'content_length' => '',
                'button_style' => 'default',
                'button_margin' => 'medium',
                'navigation' => 'pagination',

            ],

            'media_folder' => 'yootheme',

            'search_module' => 'mod_search',

        ],

    ],

];

return defined('_JEXEC') ? $config : false;
