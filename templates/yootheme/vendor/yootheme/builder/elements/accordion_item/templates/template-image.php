<?php

// Display
if (!$element['show_image'] || !$props['image']) {
    return;
}

// Image
echo $this->el('image', [

    'class' => [
        'el-image',
        'uk-border-{image_border}',
    ],

    'src' => $props['image'],
    'alt' => $props['image_alt'],
    'width' => $element['image_width'],
    'height' => $element['image_height'],
    'uk-svg' => (bool) $element['image_inline_svg'],
    'thumbnail' => true,

])->render($element);
