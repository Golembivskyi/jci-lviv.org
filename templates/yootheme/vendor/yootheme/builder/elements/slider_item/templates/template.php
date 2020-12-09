<?php

// Display
foreach (['title', 'meta', 'content', 'link'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

// Mode
$overlay = $this->el('div', [

    'class' => [
        'uk-{overlay_style}',
        'uk-position-cover [uk-position-{overlay_margin}] {@overlay_mode: cover} {@overlay_style}',
        'uk-transition-{overlay_transition} {@overlay_hover}',
    ],

]);

$content = $this->el('div', [

    'class' => [

        'uk-panel {@!overlay_style}',
        'uk-overlay {@overlay_style}',

        // Padding
        'uk-padding {@!overlay_padding} {@!overlay_style}',
        'uk-padding-remove {@overlay_padding: none} {@overlay_style}',
        'uk-padding-{!overlay_padding: |none}',

        // Position
        'uk-position-{!overlay_position: .*center.*} [{@overlay_style} uk-position-{overlay_margin}]',

        // Width
        'uk-width-{overlay_maxwidth} {@!overlay_position: top|bottom}',

        // Overlay Hover
        'uk-transition-{overlay_transition} {@overlay_hover}' => !($element['overlay_transition_background'] && $element['overlay_mode'] == 'cover' && $element['overlay_style']),
    ],

]);

// Position
if ($center = $this->expr(['uk-position-{overlay_position: .*center.*} [{@overlay_style} uk-position-{overlay_margin}]'], $element)) {
    $center = $this->el('div', ['class' => $center]);
}

// Background Color
$el = $this->el('div', [

    'class' => [
        'uk-cover-container'
    ],

    'style' => [
        'background-color: {media_background};'
    ],

]);

// Transition
if ($element['overlay_hover'] || $element['image_transition']) {

    $el->attr([

        'class' => [
            'uk-transition-toggle'
        ],

        'tabindex' => 0,
    ]);

}

// Text color
if (!$element['overlay_style'] || ($element['overlay_mode'] == 'cover' && $element['overlay_style'])) {
    $el->attr('class', ['uk-{0}' => $props['text_color'] ?: $element['text_color']]);
}

// Inverse text color on hover
if ($element['overlay_style'] && $element['overlay_mode'] == 'cover' && $element['overlay_transition_background']) {
    $el->attr('uk-toggle', [
        $props['text_color_hover'] || $element['text_color_hover'] ? 'cls: uk-light uk-dark; mode: hover' : false,
    ]);
}

$link = $this->el('a', [

    'class' => [
        'uk-position-cover',
    ],

    'href' => $props['link'],
    'target' => ['_blank {@link_target}'],
    'uk-scroll' => strpos($props['link'], '#') === 0,
]);

?>

<?= $el($props) ?>

    <?php if ($element['slider_width'] && $element['slider_height'] && $element['image_transition']) : ?>
    <div class="uk-position-cover <?= $element['image_transition'] ? "uk-transition-{$element['image_transition']} uk-transition-opaque" : '' ?>">
    <?php endif ?>

        <?= $this->render("{$__dir}/template-image", compact('props')) ?>
        <?= $this->render("{$__dir}/template-video", compact('props')) ?>

    <?php if ($element['slider_width'] && $element['slider_height'] && $element['image_transition']) : ?>
    </div>
    <?php endif ?>

    <?php if ($props['media_overlay']) : ?>
    <div class="uk-position-cover" style="background-color:<?= $props['media_overlay'] ?>"></div>
    <?php endif ?>

    <?php if ($element['overlay_mode'] == 'cover' && $element['overlay_style']) : ?>
    <?= $overlay($element, '') ?>
    <?php endif ?>

    <?php if ($props['title'] || $props['meta'] || $props['content']) : ?>
        <?php $content = $content($element, !($element['overlay_mode'] == 'cover' && $element['overlay_style']) ? $overlay->attrs : [], $this->render("{$__dir}/template-content", compact('props'))) ?>
        <?= $center ? $center($element, $content) : $content ?>
    <?php endif ?>

    <?php if ($props['link']) : ?>
    <?= $link($element, '') ?>
    <?php endif ?>

</div>
