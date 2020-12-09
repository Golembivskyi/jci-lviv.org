<?php

if (!$element['show_link'] || !$element['link_text'] || !$props['link']) {
    return;
}

// Link
$link = $this->el('a', [

    'class' => [
        'el-link',
        'uk-{link_style: link-\w+}',
        'uk-button uk-button-{!link_style: |link-\w+} [uk-button-{link_size}]',
    ],

    'href' => $props['link'],
    'target' => ['_blank {@link_target}'],
    'uk-scroll' => strpos($props['link'], '#') === 0,
]);

?>

<p><?= $link($element, $element['link_text']) ?></p>
