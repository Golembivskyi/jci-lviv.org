<?php

$config = [

    'name' => 'yootheme/joomla',

    'main' => 'YOOtheme\\Joomla',

    'inject' => [

        'url' => 'app.url',
        'styles' => 'app.styles',
        'scripts' => 'app.scripts',
        'dbo' => 'JFactory::getDBO',
        'config' => 'JFactory::getConfig',
        'document' => 'JFactory::getDocument',
        'language' => 'JFactory::getLanguage',
        'application' => 'JFactory::getApplication',

    ],

    'events' => [

        'init' => function ($app) {

            if (isset($app['path.cache']) && !is_dir($app['path.cache']) && !\JFolder::create($app['path.cache'])) {
                throw new \RuntimeException(sprintf('Unable to create cache folder in "%s"', $app['path.cache']));
            }

        }

    ]

];

return defined('_JEXEC') ? $config : false;
