<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) use ($config) {

            /**
             * @var $app
             */
            extract($params);

            $node->form = [
                'action' => $app->route('theme/newsletter/subscribe'),
            ];

            $node->settings = $app['encryption']->encrypt(array_merge(
                (array) $node->props['provider'], (array) $node->props[$node->props['provider']->name]
            ));

            $app['scripts']->add('newsletter', $config->get('url:../../app/newsletter.min.js'), [], ['defer' => true]);
        },

    ],

];
