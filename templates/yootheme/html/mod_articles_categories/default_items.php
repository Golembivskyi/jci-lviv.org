<?php

defined('_JEXEC') or die;

?>

<?php foreach ($list as $item) : $active = $_SERVER['REQUEST_URI'] == JRoute::_(ContentHelperRoute::getCategoryRoute($item->id)) ?>
<li <?= ($active ? 'class="uk-active"' : '') ?>>

	<a href="<?= JRoute::_(ContentHelperRoute::getCategoryRoute($item->id)) ?>">
		<?= $item->title ?>
		<?php if ($params->get('numitems')) : ?>
		<span class="uk-badge"><?= $item->numitems ?></span>
		<?php endif ?>
	</a>

	<?php if ($params->get('show_description', 0) && $item->description) : ?>
	<div><?= JHtml::_('content.prepare', $item->description, $item->getParams(), 'mod_articles_categories.content') ?></div>
	<?php endif ?>

	<?php if ($params->get('show_children', 0) && (($params->get('maxlevel', 0) == 0) || ($params->get('maxlevel') >= ($item->level - $startLevel))) && count($item->getChildren())) : ?>
	<ul class="uk-list">
		<?php
			$temp = $list;
			$list = $item->getChildren();
			require JModuleHelper::getLayoutPath('mod_articles_categories', $params->get('layout', 'default').'_items');
			$list = $temp;
		?>
	</ul>
	<?php endif ?>
</li>
<?php endforeach ?>
