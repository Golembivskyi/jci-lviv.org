<?php

// Display
foreach (['title', 'meta', 'content', 'link'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

if (!$element['show_image']) { $props['image'] = $props['icon'] = ''; }

// Resets
if ($props['icon'] && !$props['image']) { $element['image_card'] = ''; }
if ($element['panel_style'] || !$element['show_image']) { $element['image_box_shadow_bottom'] = ''; }

// If link is not set use the default image for the lightbox
if (!$props['link'] && $element['lightbox']) {
    $props['link'] = $props['image'];
}

// Image
$props['image'] = $this->render("{$__dir}/template-image", compact('props'));

// Card
$el = $this->el('div', [

    'class' => [
        'el-item',
        'uk-margin-auto uk-width-{item_maxwidth}',
        'uk-panel {@!panel_style}',
        'uk-card uk-{panel_style} [uk-card-{panel_size}]',
        'uk-card-hover {@!panel_style: |card-hover} {@link_style: panel}' => $props['link'],
        'uk-card-body {@panel_style}' => !$props['image'] || !$element['image_card'] || $element['image_align'] == 'between',
    ],

]);

// Image align
$grid = $this->el('div', [

    'class' => [
        'uk-child-width-expand',
        $element['panel_style'] && $element['image_card'] ? 'uk-grid-collapse uk-grid-match' : 'uk-grid-{image_gutter}',
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
if ($element['panel_style'] && $props['image'] && $element['image_card'] && $element['image_align'] != 'between') {
    $props['image'] = $this->el('div', ['class' => [
        'uk-card-media-{image_align}',
        'uk-cover-container{@image_align: left|right}',
    ]], $props['image'])->render($element);
}

// Link
$this->render("{$__dir}/template-link", compact('props'));

if ($props['link'] && $element['link_style'] == 'panel' && !$element['panel_style'] && $props['image']) {
    $props['image'] = $node->link->render($element, $props['image']);
}

// Box decoration
if ($element['image_box_decoration'] && (!$props['link'] || ($props['link'] && $element['link_style'] != 'panel'))) {

    $decoration = $this->el('div', [

        'class' => [
            'uk-box-shadow-bottom {@image_box_decoration: shadow}',
            'tm-mask-default {@image_box_decoration: mask}',
            'tm-box-decoration-{image_box_decoration: default|primary|secondary}',
            'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary}',
            'uk-inline {@!image_box_decoration: |shadow}',
        ],

    ]);

    $props['image'] = $decoration($element, $props['image']);
}

?>

<?= $el($element, $attrs); ?>

    <?php if ($props['link'] && $element['link_style'] == 'panel' && $element['panel_style']) : ?>
    <?= $node->link->render($element, '') ?>
    <?php endif ?>

    <?php if ($props['image'] && in_array($element['image_align'], ['left', 'right'])) : ?>

        <?= $grid($element) ?>
            <?= $cell_image($element, $props['image']); ?>
            <div>

                <?php if ($element['panel_style'] && $element['image_card']) : ?>
                    <?= $content($element, $this->render("{$__dir}/template-content", compact('props'))); ?>
                <?php else : ?>
                    <?= $this->render("{$__dir}/template-content", compact('props')) ?>
                <?php endif ?>

            </div>
        </div>

    <?php else : ?>

        <?php if ($element['image_align'] == 'top') : ?>
        <?= $props['image'] ?>
        <?php endif ?>

        <?php if ($element['panel_style'] && $props['image'] && $element['image_card'] && in_array($element['image_align'], ['top', 'bottom'])) : ?>
            <?= $content($element, $this->render("{$__dir}/template-content", compact('props'))); ?>
        <?php else : ?>
            <?= $this->render("{$__dir}/template-content", compact('props')) ?>
        <?php endif ?>

        <?php if ($element['image_align'] == 'bottom') : ?>
        <?= $props['image'] ?>
        <?php endif ?>

    <?php endif ?>

</div>
