<?php

// Title
$title = $this->el($props['title_element'], [

    'class' => [
        'el-title',
        'uk-margin',
        'uk-{title_style}',
        'uk-card-title {@panel_style} {@!title_style}',
        'uk-heading-{title_decoration}',
        'uk-text-{!title_color: |background}',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: bottom}' => $props['meta'],
    ],

]);

// Meta
$meta = $this->el('div', [

    'class' => [
        'el-meta',
        'uk-margin',
        'uk-[text-{@meta_style: meta}]{meta_style}',
        'uk-text-{meta_color}',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: top}',
    ],

]);

// Content
$content = $this->el('div', [

    'class' => [
        'el-content',
        'uk-margin',
        'uk-text-{content_style}',
    ],

]);

?>

<?php if ($props['meta'] && $props['meta_align'] == 'top') : ?>
<?= $meta($props, $props['meta']) ?>
<?php endif ?>

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

<?php if ($props['meta'] && $props['meta_align'] == 'bottom') : ?>
<?= $meta($props, $props['meta']) ?>
<?php endif ?>

<?php if ($props['image_align'] == 'between') : ?>
<?= $props['image'] ?>
<?php endif ?>

<?php if ($props['content']) : ?>
<?= $content($props, $props['content']) ?>
<?php endif ?>

<?php if ($props['link'] && $props['link_style'] != 'panel' && $props['link_text']) : ?>
<p><?= $link($props, $props['link_text']) ?></p>
<?php endif ?>
