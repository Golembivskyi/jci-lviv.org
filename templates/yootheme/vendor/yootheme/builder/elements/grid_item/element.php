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

            if ($builder->parent($path, 'section', 'animation') && @$parent->props['item_animation'] !== 'none') {
                $node->attrs['uk-scrollspy-class'] = empty($parent->props['item_animation']) ?: ["uk-animation-{$parent->props['item_animation']}"];
            }

        },

    ],

];
