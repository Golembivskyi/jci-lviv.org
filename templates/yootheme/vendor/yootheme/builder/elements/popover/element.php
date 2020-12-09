<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            if (empty($node->props['background_image'])) {
                $node->props['background_image'] = $params['app']->url('@assets/images/element-image-placeholder.png');
            }

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['meta_color']) && @$node->props['meta_style'] === 'muted') {
                $node->props['meta_color'] = 'muted';
                $node->props['meta_style'] = '';
            }

        },

    ],

];
