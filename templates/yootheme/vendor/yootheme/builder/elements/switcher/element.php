<?php

return [

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (@$node->props['switcher_style'] === 'thumbnail') {
                $node->props['switcher_style'] = 'thumbnav';
            }

            if (!isset($node->props['image_box_decoration']) && @$node->props['image_box_shadow_bottom'] === true) {
                $node->props['image_box_decoration'] = 'shadow';
            }

            if (!isset($node->props['meta_color']) && @$node->props['meta_style'] === 'muted') {
                $node->props['meta_color'] = 'muted';
                $node->props['meta_style'] = '';
            }

        },

    ],

];
