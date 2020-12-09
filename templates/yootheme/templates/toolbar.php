<?php

$site = $theme->get('site', []);

?>

<div class="tm-toolbar uk-visible@<?= $theme->get('mobile.breakpoint') ?>">
    <div class="uk-container uk-flex uk-flex-middle <?= $site['toolbar_fullwidth'] ? 'uk-container-expand' : '' ?> <?= $site['toolbar_center'] ? 'uk-flex-center' : '' ?>">

        <?php if ($this->countModules('toolbar-left') || ($site['toolbar_center'] && $this->countModules('toolbar-right'))) : ?>
        <div>
            <div class="uk-grid-medium uk-child-width-auto uk-flex-middle" uk-grid="margin: uk-margin-small-top">

                <?php if ($this->countModules('toolbar-left')) : ?>
                <jdoc:include type="modules" name="toolbar-left" style="cell" />
                <?php endif ?>

                <?php if ($site['toolbar_center'] && $this->countModules('toolbar-right')) : ?>
                <jdoc:include type="modules" name="toolbar-right" style="cell" />
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?php if (!$site['toolbar_center'] && $this->countModules('toolbar-right')) : ?>
        <div class="uk-margin-auto-left">
            <div class="uk-grid-medium uk-child-width-auto uk-flex-middle" uk-grid="margin: uk-margin-small-top">
                <jdoc:include type="modules" name="toolbar-right" style="cell" />
            </div>
        </div>
        <?php endif ?>

    </div>
</div>
