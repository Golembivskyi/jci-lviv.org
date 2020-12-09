<?php

return [

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['content_style'])) {
                $node->props['content_style'] = @$node->props['text_style'];
            }

        },

    ],

];
