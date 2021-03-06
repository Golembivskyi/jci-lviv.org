<?php

use Joomla\CMS\Router\Router;

$config = [

    'name' => 'yootheme/joomla-articles',

    'inject' => [
        'apikey' => 'app.apikey',
        'scripts' => 'app.scripts',
    ],

    'events' => [

        'content.data' => function ($context, $data) {

            if ($context != 'com_content.article' || !$data->id) {
                return;
            }

            \JLoader::register('ContentHelperRoute', JPATH_SITE.'/components/com_content/helpers/route.php');

            $route = \ContentHelperRoute::getArticleRoute($data->id, $data->catid, $data->language);
            $router = clone Router::getInstance('site');
            $router->setMode(JROUTER_MODE_RAW);

            $this->scripts
                ->add('$articles', "{$this->path}/app/articles.min.js", '$articles-data')
                ->add('$articles-data', sprintf('var $customizer = %s;', json_encode([
                    'context' => $context,
                    'apikey' => $this->apikey,
                    'url' => $this->app->url(($this->app['admin'] ? 'administrator/' : '').'index.php?p=customizer&option=com_ajax', [
                        'section' => 'builder',
                        'site' => (string) $router->build($route),
                    ]),
                ])), [], 'string');

        },

        'content.beforeSave' => function ($context, $article, $input) {

            if ($context != 'com_content.form' && $context != 'com_content.article') {
                return;
            }

            $form = $input->get('jform', null, 'RAW');

            // keep builder data, when JText filters are active
            if (isset($form['articletext']) && preg_match('/<!--\s{.*}\s-->\s*$/', $form['articletext'], $matches)) {
                $article->fulltext = $matches[0];
            }

        },

    ],

];

return defined('_JEXEC') ? $config : false;
