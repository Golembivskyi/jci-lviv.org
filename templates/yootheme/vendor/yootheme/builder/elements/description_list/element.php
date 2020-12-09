<?php

return [

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (@$node->props['title_style'] === 'muted') {
                $node->props['title_style'] = '';
                $node->props['title_color'] = 'muted';
            }

            if (!isset($node->props['meta_color']) && in_array(@$node->props['meta_style'], ['muted', 'primary'], true)) {
                $node->props['meta_color'] = $node->props['meta_style'];
                $node->props['meta_style'] = '';
            }

            switch (@$node->props['layout']) {
                case '':
                    $node->props['width'] = 'auto';
                    $node->props['layout'] = 'grid-2';
                    break;
                case 'width-small':
                    $node->props['width'] = 'small';
                    $node->props['layout'] = 'grid-2';
                    break;
                case 'width-medium':
                    $node->props['width'] = 'medium';
                    $node->props['layout'] = 'grid-2';
                    break;
                case 'space-between':
                    $node->props['width'] = 'expand';
                    $node->props['layout'] = 'grid-2';
                    break;
            }

        },

    ],

];
