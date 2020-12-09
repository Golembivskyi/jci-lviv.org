<?php

defined('_JEXEC') or die;

echo JHtml::_('render', 'search', [

    'position' => $module->position,
    'attrs' => [

        'id' => "search-{$module->id}",
        'action' => JRoute::_(FinderHelperRoute::getSearchRoute($params->get('searchfilter', null))),
        'method' => 'get',
        'role' => 'search',
        'class' => ($class = $params->get('moduleclass_sfx')) ? [$class] : '',

    ],
    'fields' => [

        ['tag' => 'input', 'name' => 'q', 'placeholder' => JText::_('MOD_FINDER_SEARCH_VALUE')],
        ['tag' => 'input', 'type' => 'hidden', 'name' => 'option', 'value' => 'com_finder'],
        ['tag' => 'input', 'type' => 'hidden', 'name' => 'Itemid', 'value' => $params->get('set_itemid', 0) ?: $app->input->getInt('Itemid')],

    ],

]);
