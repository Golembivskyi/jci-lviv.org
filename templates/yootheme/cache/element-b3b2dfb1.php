<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/grid_item/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'grid_item',
  'title' => 'Item',
  'width' => 500,
  'placeholder' => [
    'props' => [
      'title' => 'Title',
      'meta' => '',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      'image' => '',
      'icon' => ''
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
    'link' => $this->get('builder:link'),
    'tags' => [
      'label' => 'Tags',
      'description' => 'Enter a comma-separated list of tags, for example, <code>blue, white, black</code>.'
    ]
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'title',
        1 => 'meta',
        2 => 'content',
        3 => 'image',
        4 => 'image_alt',
        5 => 'icon',
        6 => 'link',
        7 => 'tags'
      ]
    ]
  ]
];
