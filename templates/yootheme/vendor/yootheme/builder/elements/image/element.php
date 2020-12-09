<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            if (empty($node->props['image'])) {
                $node->props['image'] = $params['app']->url('@assets/images/element-image-placeholder.png');
            }

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (@$node->props['link_target'] === true) {
                $node->props['link_target'] = 'blank';
            }

            if (!isset($node->props['image_box_decoration']) && @$node->props['image_box_shadow_bottom'] === true) {
                $node->props['image_box_decoration'] = 'shadow';
            }

        },

    ],

];
