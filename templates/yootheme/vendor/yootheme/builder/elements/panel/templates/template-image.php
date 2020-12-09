<?php

// Image
if ($props['image']) {

    $image = $this->el('image', [

        'class' => [
            'el-image',
            'uk-border-{image_border} {@!panel_style}',
            'uk-box-shadow-{image_box_shadow} {@!panel_style}',
            'uk-box-shadow-hover-{image_hover_box_shadow} {@!panel_style} {@link_style: panel}' => $props['link'],
        ],

        'src' => $props['image'],
        'alt' => $props['image_alt'],
        'width' => $props['image_width'],
        'height' => $props['image_height'],
        'uk-svg' => $props['image_inline_svg'],
        'uk-cover' => $props['panel_style'] && $props['image_card'] && in_array($props['image_align'], ['left', 'right']),
        'thumbnail' => true,
    ]);

    echo $image($props, []);

    // Placeholder image if card and layout left or right
    if ($image->attrs['uk-cover']) {
        echo $image($props, [
            'class' => ['uk-invisible'],
            'uk-cover' => false,
        ]);
    }

// Icon
} elseif ($props['icon']) {

    $icon = $this->el('span', [

        'class' => [
            'el-image',
            'uk-text-{icon_color}',
        ],

        'uk-icon' => [
            'icon: {icon};',
            'ratio: {icon_ratio};',
        ],

    ]);

    echo $icon($props, '');
}
