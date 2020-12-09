<?php

$el = $this->el('div');

// Link
$link = $this->el('a', [
    'href' => true,
    'title' => ['{link_title}'],
    'uk-totop' => true,
    'uk-scroll' => true,
]);

echo $el($props, $attrs, $link($props, ''));
