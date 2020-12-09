<?php

namespace YOOtheme\Theme;

use YOOtheme\EventSubscriberInterface;
use YOOtheme\Module;
use YOOtheme\Theme\Joomla\ChildThemeListener;
use YOOtheme\Theme\Joomla\CustomizerListener;
use YOOtheme\Theme\Joomla\SystemCheck;
use YOOtheme\Theme\Joomla\UrlListener;
use YOOtheme\Util\Str;

class Joomla extends Module implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($app)
    {
        $app->subscribe(new CustomizerListener())
            ->subscribe(new ChildThemeListener())
            ->subscribe(new UrlListener());

        $app['locator']->addPath("{$this->path}/assets", 'assets');

        $app['systemcheck'] = function () {
            return new SystemCheck();
        };

        $app['trans'] = $app->protect(function ($id) {
            return \JText::_($id);
        });

        $app['apikey'] = function () {
            return ($installer = \JPluginHelper::getPlugin('installer', 'yootheme'))
                ? (new \JRegistry($installer->params))->get('apikey')
                : false;
        };

     }

    public function onInit($theme)
    {
        $this->language->load('tpl_yootheme', $theme->path);
        $this->document->setBase(htmlspecialchars(\JUri::current()));

        $this->url->addResolver(function ($path, $parameters, $secure, $next) {

            $uri = $next($path, $parameters, $secure, $next);

            if (Str::startsWith($uri->getQueryParam('p'), 'theme/')) {

                $query = $uri->getQueryParams();
                $query['option'] = 'com_ajax';
                $query['style'] = $this->theme->id;

                $uri = $uri->withQueryParams($query);
            }

            return $uri;
        });

        if (!$this->app['admin'] && !$theme->isCustomizer && $this->document->getType() == 'html') {
            $this->app->trigger('theme.site', [$theme]);
        }
    }

    public function onSite($theme)
    {
        require "{$theme->path}/html/helpers.php";

        $theme->set('direction', $this->document->direction);
        $theme->set('site_url', rtrim(\JUri::root(), '/'));
        $theme->set('page_class', $this->application->getParams()->get('pageclass_sfx'));

        if ($this->customizer->isActive()) {
            \JHtml::_('behavior.keepalive');
            $this->conf->set('caching', 0);
        }
    }

    public function onContentData($context, $data)
    {
        if ($context != 'com_templates.style') {
            return;
        }

        $this->scripts->add('$customizer-data', sprintf('var $customizer = %s;', json_encode([
            'context' => $context,
            'apikey' => $this->app['apikey'],
            'url' => $this->app->url(($this->app['admin'] ? 'administrator/' : '').'index.php?p=customizer&option=com_ajax', ['style' => $data->id]),
        ])), [], 'string');
    }

    public static function getSubscribedEvents()
    {
        return [
            'theme.init' => ['onInit', -15],
            'theme.site' => ['onSite', 10],
            'content.data' => 'onContentData',
        ];
    }
}
