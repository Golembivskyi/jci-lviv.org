<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/list_item/element.json

return [
  'name' => 'list_item',
  'title' => 'Item',
  'width' => 500,
  'placeholder' => [
    'props' => [
      'content' => 'Lorem ipsum dolor sit amet.',
      'image' => '',
      'icon' => ''
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Content',
      'type' => 'editor'
    ],
    'image' => $this->get('builder:image'),
    'image_alt' => [
      'label' => 'Image Alt',
      'enable' => 'image'
    ],
    'icon' => [
      'label' => 'Icon',
      'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
      'type' => 'icon',
      'enable' => '!image'
    ],
    'icon_color' => [
      'label' => 'Icon Color',
      'description' => 'Set the icon color.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Emphasis' => 'emphasis',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger'
      ],
      'enable' => '!image'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target')
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'content',
        1 => 'image',
        2 => 'image_alt',
        3 => 'icon',
        4 => 'icon_color',
        5 => 'link',
        6 => 'link_target'
      ]
    ]
  ]
];
