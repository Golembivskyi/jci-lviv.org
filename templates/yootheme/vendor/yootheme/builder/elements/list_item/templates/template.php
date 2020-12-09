<?php

// Display
if (!$element['show_image']) {
    $props['image'] = '';
    $props['icon'] = '';
}

if (!$element['show_link']) {
    $props['link'] = '';
}

// Image Align
$grid = $this->el('div', [

    'class' => [
        'uk-grid-small uk-child-width-expand uk-flex-nowrap',
        'uk-flex-middle {@image_vertical_align}',
    ],

    'uk-grid' => true,
]);

$cell = $this->el('div', [

    'class' => [
        'uk-width-auto',
        'uk-flex-last {@image_align: right}',
    ],

]);

// Image
if ($props['image']) {

    $image = $this->el('image', [

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
    ]);

    $props['image'] = $image($element);

} elseif ($props['icon'] || $element['icon']) {

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

    $props['image'] = $icon(array_merge($element, array_filter($props)), '');
}

// Content
$content = $this->el('div', [

    'class' => [
        'el-content',
        'uk-[text-{@content_style: bold|muted}]{content_style}',
    ],

]);

// Link
if ($props['link']) {

    $link = $this->el('a', [

        'class' => [
            'el-link',
            'uk-link-{0}' => $element['link_style'],
        ],

        'href' => ['{link}'],
        'target' => ['_blank {@link_target}'],
        'uk-scroll' => strpos($props['link'], '#') === 0,
    ]);

    $props['content'] = $link($props, $props['content'] ?: '');

    if ($props['image']) {

        $link = $this->el('a', [
            'class' => ['uk-link-reset'],
            'href' => ['{link}'],
        ]);

        $props['image'] = $link($props, $props['image']);
    }
}

?>

<?php if ($props['image']) : ?>
    <?= $grid($element) ?>
        <?= $cell($element, $props['image']) ?>
        <div>
            <?= $content($element, $props['content'] ?: '') ?>
        </div>
    </div>
<?php else : ?>
    <?= $content($element, $props['content'] ?: '') ?>
<?php endif ?>
