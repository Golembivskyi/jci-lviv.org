<?php

// Display
foreach (['title', 'meta', 'content', 'image', 'link', 'label', 'thumbnail'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

// Image
$image = $this->render("{$__dir}/template-image", compact('props'));

// Image Align
$grid = $this->el('div', [

    'class' => [
        'uk-child-width-expand',
        'uk-grid-{image_gutter}',
        'uk-flex-middle {@image_vertical_align}',
    ],

    'uk-grid' => true,
]);

$cell = $this->el('div', [

    'class' => [
        'uk-width-{image_grid_width}[@{image_breakpoint}]',
        'uk-flex-last{@image_align: right}[@{image_breakpoint}]',
    ],

]);

?>

<?php if ($image && in_array($element['image_align'], ['left', 'right'])) : ?>

<?= $grid($element) ?>
    <?= $cell($element, $image) ?>
    <div><?= $this->render("{$__dir}/template-content", compact('props')) ?></div>
</div>

<?php else : ?>

<?= $element['image_align'] == 'top' ? $image : '' ?>
<?= $this->render("{$__dir}/template-content", compact('props')) ?>
<?= $element['image_align'] == 'bottom' ? $image : '' ?>

<?php endif ?>
