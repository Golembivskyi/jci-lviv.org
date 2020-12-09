<?php

if (!$props['link']) {
    return;
}

$link = $this->el('a', [

    'class' => [
        'el-link',
        'uk-position-cover uk-position-z-index uk-margin-remove-adjacent {@link_style: panel} {@panel_style}',
        'uk-box-shadow-bottom {@image_box_decoration: shadow} {@link_style: panel}',
        'tm-mask-default {@image_box_decoration: mask} {@link_style: panel}',
        'tm-box-decoration-{image_box_decoration: default|primary|secondary} {@link_style: panel}',
        'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary} {@link_style: panel}',
        'uk-inline {@!image_box_decoration: |shadow} {@link_style: panel}',
        'uk-{link_style: link-(muted|text)}',
        'uk-button uk-button-{!link_style: |panel|link-muted|link-text} [uk-button-{link_size}]',
    ],

    'href' => $props['link'],
]);

// Lightbox
if ($element['lightbox']) {

    if ($type = $this->isImage($props['link'])) {

        if ($type !== 'svg' && ($element['lightbox_image_width'] || $element['lightbox_image_height'])) {
            $props['link'] = "{$props['link']}#thumbnail={$element['lightbox_image_width']},{$element['lightbox_image_height']},{$element['lightbox_image_orientation']}";
        }

        $link->attr([
            'href' => $app['image']->getUrl($props['link']),
            'data-alt' => $props['image_alt'],
            'data-type' => 'image',
        ]);

    } else {

        $link->attr(
            'data-type',
            $this->isVideo($props['link'])
                ? 'video'
                : (!$this->iframeVideo($props['link']) ? 'iframe' : true)
        );

    }

    // Caption
    $caption = '';

    if ($props['title'] && $element['title_display'] != 'item') {
        $caption .= "<h4 class='uk-margin-remove'>{$props['title']}</h4>";
    }

    if ($props['content'] && $element['content_display'] != 'item') {
        $caption .= $props['content'];
    }

    if ($caption) {
        $link->attr('data-caption', $caption);
    }

} else {

    $link->attr([
        'target' => ['_blank {@link_target}'],
        'uk-scroll' => strpos($props['link'], '#') === 0,
    ]);

}

$node->link = $link;
