<?php

// Display
foreach (['title', 'meta', 'content', 'link', 'thumbnail'] as $key) {
    if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

// Extra effect for pull/push
$opacity = ($props['text_color'] ?: $element['text_color']) === 'light' ? '0.5' : '0.2';

$pull_push = $this->el('div', [

    'class' => [
        'uk-position-cover',
    ],

    'uk-slideshow-parallax' => $element['slideshow_animation'] == 'push'
        ? 'scale: 1.2,1.2,1'
        : 'scale: 1,1.2,1.2',
]);

$pull_push_overlay = $this->el('div', [

    'class' => [
        'uk-position-cover',
    ],

    'uk-slideshow-parallax' => $element['slideshow_animation'] == 'push'
        ? "opacity: 0,0,{$opacity}; backgroundColor: #000,#000"
        : "opacity: {$opacity},0,0; backgroundColor: #000,#000",
]);

// Kenburns
$kenburns_alternate = [
    'center-left',
    'top-right',
    'bottom-left',
    'top-center',
    '', // center-center
    'bottom-right',
];

$kenburns = $this->el('div', [

    'class' => [
        'uk-position-cover uk-animation-kenburns uk-animation-reverse',
        'uk-transform-origin-{0}' => $element['slideshow_kenburns'] == 'alternate'
            ? $kenburns_alternate[$i % count($kenburns_alternate)]
            : ($element['slideshow_kenburns'] == 'center-center'
                ? ''
                : $element['slideshow_kenburns']),
    ],

    'style' => [
        '-webkit-animation-duration: {slideshow_kenburns_duration}s;',
        'animation-duration: {slideshow_kenburns_duration}s;',
    ],

]);

// Image
$image = $this->el('image', [

    'class' => [
        'el-image',
    ],

    'src' => $props['image'],
    'alt' => $props['image_alt'],
    'uk-cover' => true,
    'uk-img' => 'target: !.uk-slideshow-items',
    'width' => $element['image_width'],
    'height' => $element['image_height'],
    'thumbnail' => true,
]);

// Video
$video = $this->el('video', [
    'class' => ['el-image'],
    'uk-cover' => true,
], '');

if ($iframe = $this->iframeVideo($props['video'])) {

    $video = $video->copy([
        'src' => $iframe,
        'frameborder' => '0',
        'allowfullscreen' => true,
    ], '', 'iframe');

} else {

    $video->attr([
        'src' => $props['video'],
        'controls' => false,
        'loop' => true,
        'autoplay' => true,
        'muted' => true,
        'playsinline' => true,
    ]);

}

// Blend mode
if ($props['media_blend_mode']) {
    if (in_array($element['slideshow_animation'], ['push', 'pull'])) {
        $pull_push->attr('class', ["uk-blend-{$props['media_blend_mode']}"]);
    } elseif ($element['slideshow_kenburns']) {
        $kenburns->attr('class', ["uk-blend-{$props['media_blend_mode']}"]);
    } elseif ($props['image']) {
        $image->attr('class', ["uk-blend-{$props['media_blend_mode']}"]);
    } elseif ($props['video']) {
        $video->attr('class', ["uk-blend-{$props['media_blend_mode']}"]);
    }
}

// Overlay Position
$position = $this->el('div', [

    'class' => [
        'uk-position-cover uk-flex',
        'uk-flex-top {@overlay_position: .*top.*}',
        'uk-flex-bottom {@overlay_position: .*bottom.*}',
        'uk-flex-left {@overlay_position: .*left.*}',
        'uk-flex-right {@overlay_position: .*right.*}',
        'uk-flex-center {@overlay_position: (|.*-)center}',
        'uk-flex-middle {@overlay_position: center(|-.*)}',
        'uk-container {@overlay_container}',
        'uk-container-{!overlay_container: |default}',
        'uk-section[-{overlay_container_padding}] {@overlay_container}',
        'uk-padding[-{overlay_margin}] {@!overlay_margin: none} {@!overlay_container}',
    ],

]);

?>

<?php if (in_array($element['slideshow_animation'], ['push', 'pull'])) : ?>
<?= $pull_push($element) ?>
<?php endif ?>

    <?php if ($element['slideshow_kenburns']) : ?>
    <?= $kenburns($element) ?>
    <?php endif ?>

        <?= $props['image'] ? $image() : '' ?>
        <?= $props['video'] && !$props['image'] ? $video() : '' ?>

    <?php if ($element['slideshow_kenburns']) : ?>
    </div>
    <?php endif ?>

<?php if (in_array($element['slideshow_animation'], ['push', 'pull'])) : ?>
</div>
<?= $pull_push_overlay($element, '') ?>
<?php endif ?>

<?php if ($props['media_overlay']) : ?>
<div class="uk-position-cover" style="background-color:<?= $props['media_overlay'] ?>"></div>
<?php endif ?>

<?php if ($props['title'] || $props['meta'] || $props['content'] || $props['link']) : ?>
<?= $position($element) ?>

    <?= $this->render("{$__dir}/template-overlay", compact('props')) ?>
    <?= $this->render("{$__dir}/template-content", compact('props')) ?>

    </div>
</div>
<?php endif ?>
