<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {

            /**
             * @var $path
             * @var $parent
             * @var $builder
             */
            extract($params);

            if (empty($node->props['image']) && empty($node->props['hover_image'])) {
                $node->props['image'] = $params['app']->url('@assets/images/element-image-placeholder.png');
            }

            if ($builder->parent($path, 'section', 'animation') && @$parent->props['item_animation'] !== 'none') {
                $node->attrs['uk-scrollspy-class'] = empty($parent->props['item_animation']) ?: ["uk-animation-{$parent->props['item_animation']}"];
            }

        },

    ],

    'updates' => [

        '1.18.0' => function ($node, array $params) {

            if (!isset($node->props['hover_image'])) {
                $node->props['hover_image'] = @$node->props['image2'];
            }

        },

    ],

];
