<?php

// Title
$title = $this->el($props['title_element'], [

    'class' => [
        'el-title uk-margin',
        'uk-{title_style}',
        'uk-heading-{title_decoration}',
        'uk-text-{title_color} {@!title_color: background}',
        'uk-transition-{title_transition} {@overlay_hover}',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: bottom} {@meta}',
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

]);

// Content
$content = $this->el('div', [

    'class' => [
        'el-content uk-margin',
        'uk-text-{content_style}',
        'uk-transition-{content_transition} {@overlay_hover}',
    ],

]);

?>

<?= $props['meta'] && $props['meta_align'] == 'top' ? $meta($props, $props['meta']) : '' ?>

<?php if ($props['title']) : ?>
<?= $title($props) ?>
    <?php if ($props['title_color'] == 'background') : ?>
    <span class="uk-text-background"><?= $props['title'] ?></span>
    <?php elseif ($props['title_decoration'] == 'line') : ?>
    <span><?= $props['title'] ?></span>
    <?php else : ?>
    <?= $props['title'] ?>
    <?php endif ?>
<?= $title->end() ?>
<?php endif ?>

<?= $props['meta'] && $props['meta_align'] == 'bottom' ? $meta($props, $props['meta']) : '' ?>
<?= $props['content'] ? $content($props, $props['content']) : '' ?>
