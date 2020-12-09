<?php

// Display
foreach (['title', 'meta', 'content', 'image', 'link'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

// Item
$el = $this->el('div', [
    'class' => [
        'el-item',
        'uk-card uk-card-{card_style}',
        'uk-card-{card_size}',
        'uk-card-hover {@link_style: card}' => $props['link'],
        'uk-card-body' => !($props['image'] && $element['image_card']),
    ],
]);

// Link
$link = $this->el('a', [

    'class' => [
        'el-link',
        'uk-position-cover uk-margin-remove-adjacent {@link_style: card}',
        'uk-{link_style: link-\w+}',
        'uk-button uk-button-{!link_style: |link-\w+} [uk-button-{link_size}] {@!link_style: card}',
    ],

    'href' => $props['link'],
    'target' => ['_blank {@link_target}'],
    'uk-scroll' => strpos($props['link'], '#') === 0,
]);

?>

<?= $el($element) ?>

    <?php if ($props['link'] && $element['link_style'] == 'card') : ?>
    <?= $link($element, '') ?>
    <?php endif ?>

    <?= $this->render("{$__dir}/template-image", compact('props')) ?>

    <?php if ($props['image'] && $element['image_card']) : ?>
        <div class="uk-card-body"><?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?></div>
    <?php else : ?>
        <?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?>
    <?php endif ?>

</div>
