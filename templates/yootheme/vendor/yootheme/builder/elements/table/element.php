<?php

return [

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['meta_color']) && in_array(@$node->props['meta_style'], ['muted', 'primary'], true)) {
                $node->props['meta_color'] = $node->props['meta_style'];
                $node->props['meta_style'] = '';
            }

        },

    ],

];
