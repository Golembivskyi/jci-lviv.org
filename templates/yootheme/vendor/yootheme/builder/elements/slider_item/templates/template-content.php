<?php

// Title
$title = $this->el($element['title_element'], [

    'class' => [
        'el-title uk-margin',
        'uk-{title_style}',
        'uk-heading-{title_decoration}',
        'uk-text-{!title_color: |background}',
        'uk-transition-{title_transition} {@overlay_hover}',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: bottom}' => $props['meta'],
    ],

]);

// Meta
$meta = $this->el('div', [

    'class' => [
        'el-meta uk-margin',
        'uk-transition-{meta_transition} {@overlay_hover}',
        'uk-[text-{@meta_style: meta}]{meta_style}',
        'uk-text-{meta_color}',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: top}',
    ],

], $props['meta']);

// Content
$content = $this->el('div', [

    'class' => [
        'el-content uk-margin',
        'uk-text-{content_style}',
        'uk-transition-{content_transition} {@overlay_hover}',
    ],

], $props['content']);

?>

<?php if ($props['meta'] && $element['meta_align'] == 'top') : ?>
<?= $meta($element) ?>
<?php endif ?>

<?php if ($props['title']) : ?>
<?= $title($element) ?>
    <?php if ($element['title_color'] == 'background') : ?>
    <span class="uk-text-background"><?= $props['title'] ?></span>
    <?php elseif ($element['title_decoration'] == 'line') : ?>
    <span><?= $props['title'] ?></span>
    <?php else : ?>
    <?= $props['title'] ?>
    <?php endif ?>
<?= $title->end() ?>
<?php endif ?>

<?php if ($props['meta'] && $element['meta_align'] == 'bottom') : ?>
<?= $meta($element) ?>
<?php endif ?>

<?php if ($props['content']) : ?>
<?= $content($element) ?>
<?php endif ?>
