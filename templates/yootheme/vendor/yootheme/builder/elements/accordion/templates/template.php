<?php

$el = $this->el('div', [

    'uk-accordion' => [
        'multiple: {multiple};',
        'collapsible: {0};' => $props['collapsible'] ? 'true' : 'false',
    ],

]);

?>

<?= $el($props, $attrs) ?>

    <?php foreach ($children as $child) : ?>
    <div class="el-item">
        <a class="el-title uk-accordion-title" href="#"><?= $child->props['title'] ?></a>
        <div class="uk-accordion-content"><?= $builder->render($child, ['element' => $props]) ?></div>
    </div>
    <?php endforeach ?>

</div>