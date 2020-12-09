<?php

if (!$props['image'] && !$props['hover_image']) {
    return;
}

$image = $this->el('image', [
    'src' => $props['image'],
    'alt' => $props['image_alt'],
    'class' => ['el-image'],
    'uk-cover' => (bool) $props['image_min_height'],
    'uk-img' => true,
    'uk-gif' => $this->isImage($props['image']) == 'gif',
    'thumbnail' => [$props['image_width'], $props['image_height']],
    'width' => $props['image_width'],
    'height' => $props['image_height'],
]);

// Transition
$container_image = false;
$container_hover_image = false;
$transition = 'uk-transition-'.($props['image_transition'] ?: 'fade');

if ($props['hover_image'] && !$props['image']) {

    $image->attr('src', $props['image'] = $props['hover_image']);
    $props['hover_image'] = '';

    if ($props['image_min_height']) {
        $container_image = $transition;
    } else {
        $image->attr('class', [$transition]);
    }

} elseif ($props['hover_image']) {

    $container_hover_image = $transition;

} elseif ($props['image_transition']) {

    $transition = "uk-transition-opaque uk-transition-{$props['image_transition']}";
    if ($props['image_min_height']) {
        $container_image = $transition;
    } else {
        $image->attr('class', [$transition]);
    }

}

// Placeholder and min height
$placeholder = '';

if ($props['image_min_height']) {

    $width = $props['image_width'];
    $height = $props['image_height'];

    if (!$width || !$height) {
        if ($placeholder = $app['image']->create($props['image'], false)) {
            if ($width || $height) {
                $placeholder = $placeholder->thumbnail($width, $height);
            }
            $width = $placeholder->getWidth();
            $height = $placeholder->getHeight();
        }
    }

    if ($width && $height) {
        echo "<canvas width=\"{$width}\" height=\"{$height}\"></canvas>";
    }
}

// Image
$props['image'] = $image($props);

if ($container_image) {
    $props['image'] = "<div class=\"uk-position-cover {$container_image}\">{$props['image']}</div>";
}

echo $props['image'];

// Hover Image
if ($props['hover_image']) {

    $props['hover_image'] = $this->el('image', [
        'src' => $props['hover_image'],
        'class' => 'el-hover-image',
        'alt' => true,
        'uk-cover' => true,
        'uk-img' => true,
        'thumbnail' => [$props['image_width'], $props['image_height']],
        'width' => $props['image_width'],
        'height' => $props['image_height'],
    ])->render();

    if ($container_hover_image) {
        $props['hover_image'] = "<div class=\"uk-position-cover {$container_hover_image}\">{$props['hover_image']}</div>";
    }

    echo $props['hover_image'];
}
