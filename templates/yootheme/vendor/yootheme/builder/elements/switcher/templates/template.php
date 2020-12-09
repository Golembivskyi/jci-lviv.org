<?php

$props['connect'] = "js-{$this->uid()}";

$el = $this->el('div');

// Nav Alignment
$grid = $this->el('div', [

    'class' => [
        'uk-child-width-expand',
        'uk-grid-{switcher_gutter}',
        'uk-flex-middle {@switcher_vertical_align}',
    ],

    'uk-grid' => true,
]);

$cell = $this->el('div', [

    'class' => [
        'uk-width-{switcher_grid_width}@{switcher_breakpoint}',
        'uk-flex-last@{switcher_breakpoint} {@switcher_position: right}',
    ],

]);

// Content
$content = $this->el('ul', [
    'id' => ['{connect}'],
    'class' => 'uk-switcher',
    'uk-height-match' => ['row: false {@switcher_height}'],
]);

?>

<?= $el($props, $attrs) ?>

    <?php if (in_array($props['switcher_position'], ['left', 'right'])) : ?>

        <?= $grid($props) ?>
            <?= $cell($props, $this->render("{$__dir}/template-nav", compact('props'))) ?>
            <div>

                <?= $content($props) ?>
                    <?php foreach ($children as $child) : ?>
                    <li class="el-item"><?= $builder->render($child, ['element' => $props]) ?></li>
                    <?php endforeach ?>
                </ul>

            </div>
        </div>

    <?php else : ?>

        <?= $props['switcher_position'] == 'top' ? $this->render("{$__dir}/template-nav", compact('props')) : '' ?>

        <?= $content($props) ?>
            <?php foreach ($children as $child) : ?>
            <li class="el-item"><?= $builder->render($child, ['element' => $props]) ?></li>
            <?php endforeach ?>
        </ul>

        <?= $props['switcher_position'] == 'bottom' ? $this->render("{$__dir}/template-nav", compact('props')) : '' ?>

    <?php endif ?>

</div>
