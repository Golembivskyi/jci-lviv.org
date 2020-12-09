<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/accordion_item/element.json

return [
  'name' => 'accordion_item',
  'title' => 'Item',
  'width' => 500,
  'placeholder' => [
    'props' => [
      'title' => 'Title',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      'image' => ''
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
    'content' => [
      'label' => 'Content',
      'type' => 'editor'
    ],
    'image' => $this->get('builder:image'),
    'image_alt' => [
      'label' => 'Image Alt',
      'enable' => 'image'
    ],
    'link' => $this->get('builder:link')
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'title',
        1 => 'content',
        2 => 'image',
        3 => 'image_alt',
        4 => 'link'
      ]
    ]
  ]
];
