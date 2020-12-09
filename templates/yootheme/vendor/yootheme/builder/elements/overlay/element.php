<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            if (empty($node->props['image']) && empty($node->props['hover_image'])) {
                $node->props['image'] = $params['app']->url('@assets/images/element-image-placeholder.png');
            }

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['overlay_image'])) {
                $node->props['overlay_image'] = @$node->props['image2'];
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
