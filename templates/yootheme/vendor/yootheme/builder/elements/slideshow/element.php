<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            // TODO Fix me
            $node->props['parallaxOptions'] = $node->props['overlay_animation'] === 'parallax'
                ? [$params['view'], 'parallaxOptions']
                : function () { return false; };

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['slideshow_box_decoration']) && @$node->props['slideshow_box_shadow_bottom'] === true) {
                $node->props['slideshow_box_decoration'] = 'shadow';
            }

            if (!isset($node->props['meta_color']) && @$node->props['meta_style'] === 'muted') {
                $node->props['meta_color'] = 'muted';
                $node->props['meta_style'] = '';
            }

        },

    ],

];
