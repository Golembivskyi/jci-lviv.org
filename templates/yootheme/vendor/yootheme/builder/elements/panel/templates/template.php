<?php

// Resets
if ($props['icon'] && !$props['image']) { $props['image_card'] = ''; }
if ($props['panel_style'] || !$props['image']) { $props['image_box_decoration'] = ''; }

// Image
$props['image'] = $this->render("{$__dir}/template-image", compact('props'));

// Card
$el = $this->el('div', [

    'class' => [
        'uk-panel {@!panel_style}',
        'uk-card uk-{panel_style} [uk-card-{panel_size}]',
        'uk-card-hover {@!panel_style: |card-hover} {@link_style: panel} {@link}',
        'uk-card-body {@panel_style}' => !$props['image'] || !$props['image_card'] || $props['image_align'] == 'between',
    ],

]);

// Image align
$grid = $this->el('div', [

    'class' => [
        'uk-child-width-expand',
        $props['panel_style'] && $props['image_card'] ? 'uk-grid-collapse uk-grid-match' : 'uk-grid-{image_gutter}',
        'uk-flex-middle {@image_vertical_align}',
    ],

    'uk-grid' => true,
]);

$cell_image = $this->el('div', [

    'class' => [
        'uk-width-{image_grid_width}[@{image_breakpoint}]',
        'uk-flex-last[@{image_breakpoint}] {@image_align: right}',
    ],

]);

// Content
$content = $this->el('div', ['class' => ['uk-card-body']]);

// Card media
if ($props['panel_style'] && $props['image'] && $props['image_card'] && $props['image_align'] != 'between') {
    $props['image'] = $this->el('div', ['class' => [
        'uk-card-media-{image_align}',
        'uk-cover-container{@image_align: left|right}',
    ]], $props['image'])->render($props);
}

// Link
if ($props['link']) {

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

        'href' => ['{link}'],
        'target' => ['_blank {@link_target}'],
        'uk-scroll' => strpos($props['link'], '#') === 0,
    ]);

    if ($props['link_style'] == 'panel' && !$props['panel_style'] && $props['image']) {
        $props['image'] = $link($props, $props['image']);
    }

}

// Box decoration
if ($props['image_box_decoration'] && (!$props['link'] || ($props['link'] && $props['link_style'] != 'panel'))) {

    $decoration = $this->el('div', [

        'class' => [
            'uk-box-shadow-bottom {@image_box_decoration: shadow}',
            'tm-mask-default {@image_box_decoration: mask}',
            'tm-box-decoration-{image_box_decoration: default|primary|secondary}',
            'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary}',
            'uk-inline {@!image_box_decoration: |shadow}',
        ],

    ]);

    $props['image'] = $decoration($props, $props['image']);
}

?>

<?= $el($props, $attrs) ?>

    <?php if ($props['link'] && $props['link_style'] == 'panel' && $props['panel_style']) : ?>
    <?= $link($props, '') ?>
    <?php endif ?>

    <?php if ($props['image'] && in_array($props['image_align'], ['left', 'right'])) : ?>

        <?= $grid($props) ?>
            <?= $cell_image($props, $props['image']) ?>
            <div>

                <?php if ($props['panel_style'] && $props['image_card']) : ?>
                    <?= $content($props, $this->render("{$__dir}/template-content", compact('props', 'link'))) ?>
                <?php else : ?>
                    <?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?>
                <?php endif ?>

            </div>
        </div>

    <?php else : ?>

        <?php if ($props['image_align'] == 'top') : ?>
        <?= $props['image'] ?>
        <?php endif ?>

        <?php if ($props['panel_style'] && $props['image'] && $props['image_card'] && in_array($props['image_align'], ['top', 'bottom'])) : ?>
            <?= $content($props, $this->render("{$__dir}/template-content", compact('props', 'link'))) ?>
        <?php else : ?>
            <?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?>
        <?php endif ?>

        <?php if ($props['image_align'] == 'bottom') : ?>
        <?= $props['image'] ?>
        <?php endif ?>

    <?php endif ?>

</div>
