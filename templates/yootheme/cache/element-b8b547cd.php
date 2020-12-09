<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/description_list_item/element.json

return [
  'name' => 'description_list_item',
  'title' => 'Item',
  'width' => 500,
  'placeholder' => [
    'props' => [
      'title' => 'Title',
      'meta' => '',
      'content' => 'Lorem ipsum dolor sit amet.'
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'title' => [
      'label' => 'Title'
    ],
    'meta' => [
      'label' => 'Meta'
    ],
    'content' => [
      'label' => 'Content',
      'type' => 'editor'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target')
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'title',
        1 => 'meta',
        2 => 'content',
        3 => 'link',
        4 => 'link_target'
      ]
    ]
  ]
];
