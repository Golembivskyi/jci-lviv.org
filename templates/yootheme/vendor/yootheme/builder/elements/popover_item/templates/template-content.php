<?php

// Title
$title = $this->el($element['title_element'], [

    'class' => [
        'el-title uk-margin',
        'uk-heading-{title_decoration}',
        'uk-text-{!title_color: |background}',
        'uk-{0}' => $element['title_style'] ?: 'card-title',
        'uk-margin-remove-adjacent [uk-margin-{meta_margin}-bottom] {@meta_align: bottom}' => $props['meta'],
    ],

]);

// Meta
$meta = $this->el('div', [

    'class' => [
        'el-meta uk-margin',
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
    ],

]);

?>

<?php if ($props['meta'] && $element['meta_align'] == 'top') : ?>
<?= $meta($element, [], $props['meta']) ?>
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
<?= $meta($element, $props['meta']) ?>
<?php endif ?>

<?php if ($props['content']) : ?>
<?= $content($element, $props['content']) ?>
<?php endif ?>

<?php if ($props['link'] && $element['link_style'] != 'card' && $element['link_text']) : ?>
<p><?= $link($element, $element['link_text']) ?></p>
<?php endif ?>
