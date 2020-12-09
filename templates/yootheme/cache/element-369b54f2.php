<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/subnav_item/element.json

return [
  'name' => 'subnav_item',
  'title' => 'Item',
  'width' => 500,
  'placeholder' => [
    'props' => [
      'content' => 'Item'
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Content'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target')
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'content',
        1 => 'link',
        2 => 'link_target'
      ]
    ]
  ]
];
