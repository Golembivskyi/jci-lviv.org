<?php

defined('_JEXEC') or die();

$theme = JHtml::_('theme');

// Set HTML5 output
$this->setHtml5(true);

// Set view
$input = JFactory::getApplication()->input;
$view = '';

if (in_array($input->get('option'), ['com_content', 'com_tags'])) {

    if (in_array($input->get('view'), ['category', 'featured', 'tag'])) {
        $view = 'blog';
    } elseif (($input->get('view') == 'article') && ($input->get('layout') == 'post')) {
        $view = 'post';
    }

}

// Parameter shortcuts
$site  = $theme->get('site', []);
$blog_settings  = $theme->get('blog', []);
$post_settings  = $theme->get('post', []);

// Page
$attrs_page = [];
$attrs_page_container = [];

$attrs_page['class'][] = 'tm-page';

if ($site['layout'] == 'boxed') {

    $attrs_page['class'][] = $site['boxed.alignment'] ? 'uk-margin-auto' : '';

    $attrs_page_container['class'][] = 'tm-page-container';
    $attrs_page_container['class'][] = $site['boxed.padding'] ? 'tm-page-container-padding' : '';
    $attrs_page_container['style'][] = $site['boxed.media'] ? "background-image: url('{$theme->app->url($site['boxed.media'])}');" : '';

}

// Main section
$attrs_main_section = [];
$attrs_main_section['class'][] = 'tm-main uk-section uk-section-default';
$attrs_main_section['class'][] = $view == 'blog' && $blog_settings['padding'] ? "uk-section-{$blog_settings['padding']}" : '';
$attrs_main_section['class'][] = $view == 'post' && $post_settings['padding'] ? "uk-section-{$post_settings['padding']}" : '';
$attrs_main_section['class'][] = $view == 'post' && $post_settings['padding_remove'] ? 'uk-padding-remove-top' : '';

// Main container
$attrs_main_container = [];

if ($view !== 'post' || ($view == 'post' && $post_settings['width'] != 'none')) {
    $attrs_main_container['class'][] = 'uk-container';
    $attrs_main_container['class'][] = $view == 'blog' && $blog_settings['width'] ? "uk-container-{$blog_settings['width']}" : '';
    $attrs_main_container['class'][] = $view == 'post' && $post_settings['width'] ? "uk-container-{$post_settings['width']}" : '';
}

?>
<!DOCTYPE html>
<html lang="<?= $this->language ?>" dir="<?= $this->direction ?>" vocab="http://schema.org/">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $theme->get('favicon') ?>">
        <link rel="apple-touch-icon-precomposed" href="<?= $theme->get('touchicon') ?>">
        <jdoc:include type="head" />
    </head>
    <body class="<?= $theme->get('body_class')->join(' ') ?>">

        <?php if ($site['layout'] == 'boxed') : ?>
        <div<?= JHtml::_('attrs', $attrs_page_container) ?>>
        <?php endif ?>

        <div<?= JHtml::_('attrs', $attrs_page) ?>>

            <div class="tm-header-mobile uk-hidden@<?= $theme->get('mobile.breakpoint') ?>">
            <?= JHtml::_('render', 'header-mobile') ?>
            </div>

            <?php if ($this->countModules('toolbar-left') || $this->countModules('toolbar-right')) : ?>
            <?= JHtml::_('render', 'toolbar') ?>
            <?php endif ?>

            <?= JHtml::_('render', 'header') ?>

            <jdoc:include type="modules" name="top" style="section" />

            <?php if (!$theme->get('builder')) : ?>

            <div id="tm-main" <?= JHtml::_('attrs', $attrs_main_section) ?> uk-height-viewport="expand: true">
                <div<?= JHtml::_('attrs', $attrs_main_container) ?>>

                    <?php if ($this->countModules('sidebar')) :
                            $sidebar = $theme->get('sidebar', []);
                            $grid = ['uk-grid'];
                            $grid[] = $sidebar['gutter'] ? "uk-grid-{$sidebar['gutter']}" : '';
                            $grid[] = $sidebar['divider'] ? 'uk-grid-divider' : '';
                    ?>

                    <div<?= JHtml::_('attrs', ['class' => $grid, 'uk-grid' => true]) ?>>
                        <div class="uk-width-expand@<?= $theme->get('sidebar.breakpoint') ?>">

                    <?php endif ?>

                            <?php if ($site['breadcrumbs']) : ?>
                            <div class="uk-margin-medium-bottom">
                                <?= JHtml::_('section', 'breadcrumbs') ?>
                            </div>
                            <?php endif ?>

            <?php endif ?>

            <jdoc:include type="message" />
            <jdoc:include type="component" />

            <?= JHtml::_('section', 'builder') ?>

            <?php if (!$theme->get('builder')) : ?>

                        <?php if ($this->countModules('sidebar')) : ?>
                        </div>

                        <?= JHtml::_('render', 'sidebar') ?>

                    </div>
                     <?php endif ?>

                </div>
            </div>
            <?php endif ?>

            <jdoc:include type="modules" name="bottom" style="section" />

            <?= JHtml::_('builder', json_encode($theme->get('footer.content')), ['prefix' => 'footer']) ?>

        </div>

        <?php if ($site['layout'] == 'boxed') : ?>
        </div>
        <?php endif ?>

        <jdoc:include type="modules" name="debug" />

    </body>
</html>
