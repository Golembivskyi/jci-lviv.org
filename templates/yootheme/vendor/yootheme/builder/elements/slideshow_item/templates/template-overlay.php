<?php

// Overlay
$overlay = $this->el('div', [

    'class' => [
        'el-overlay',
        'uk-flex-1 {@overlay_position: top|bottom}',
        'uk-panel {@!overlay_style}',
        'uk-overlay uk-{overlay_style}',
        'uk-padding-{overlay_padding} {@overlay_style}',
        'uk-width-{overlay_width} {@!overlay_position: top|bottom}',
        'uk-transition-{overlay_animation} {@!overlay_animation: |parallax}',
        'uk-{0} {@!overlay_style}' => $props['text_color'] ?: $element['text_color'],
    ],

    'uk-slideshow-parallax' => $element['parallaxOptions']($element, 'overlay_'),
]);

echo $overlay($element);
