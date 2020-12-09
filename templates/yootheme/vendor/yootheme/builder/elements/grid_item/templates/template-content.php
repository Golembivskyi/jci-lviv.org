<?php

// Title
$title = $this->el($element['title_element'], [

    'class' => [
        'el-title uk-margin',
        'uk-{title_style}',
        'uk-card-title' => $element['panel_style'] && !$element['title_style'],
        'uk-heading-{title_decoration}',
        'uk-text-{!title_color: |background}',
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

<?= $props['meta'] && $element['meta_align'] == 'top' ? $meta($element, $props['meta']) : '' ?>

<?php if ($props['title'] && $element['title_display'] != 'lightbox') : ?>
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

<?= $props['meta'] && $element['meta_align'] == 'bottom' ? $meta($element, $props['meta']) : '' ?>

<?= $element['image_align'] == 'between' ? $props['image'] : '' ?>

<?= $props['content'] && $element['content_display'] != 'lightbox' ? $content($element, $props['content']) : '' ?>

<?php if ($props['link'] && $element['link_style'] != 'panel' && $element['link_text']) : ?>
<p><?= $node->link->render($element, $element['link_text']); ?></p>
<?php endif ?>
