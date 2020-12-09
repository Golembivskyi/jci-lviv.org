<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            $node->tags = [];

            // Filter tags
            if (!empty($node->props['filter'])) {

                foreach ($node->children as $child) {

                    $child->tags = [];

                    foreach (explode(',', @$child->props['tags']) as $tag) {
                        if ($key = str_replace(' ', '-', trim($tag))) {
                            $child->tags[$key] = trim($tag);
                        }
                    }

                    $node->tags += $child->tags;
                }

                natsort($node->tags);
            }

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['grid_parallax']) && @$node->props['grid_mode'] === 'parallax') {
                $node->props['grid_parallax'] = @$node->props['grid_parallax_y'];
            }

            if (!isset($node->props['show_hover_image'])) {
                $node->props['show_hover_image'] = @$node->props['show_image2'];
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
