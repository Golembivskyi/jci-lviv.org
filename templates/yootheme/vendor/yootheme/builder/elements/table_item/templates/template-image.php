<?php

if (!$props['image']) {
    return;
}

// Image
$image = $this->el('image', [

    'class' => [
        'el-image',
        'uk-preserve-width',
        'uk-border-{image_border}',
        'uk-box-shadow-{image_box_shadow}',
    ],

    'src' => $props['image'],
    'alt' => $props['image_alt'],
    'width' => $element['image_width'],
    'height' => $element['image_height'],
    'uk-svg' => (bool) $element['image_inline_svg'],
    'thumbnail' => true,
]);

echo $image($element);
