<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/html/element.json

return [
  'name' => 'html',
  'title' => 'Html',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'placeholder' => [
    'props' => [
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Content',
      'type' => 'editor',
      'editor' => 'code',
      'mode' => 'text/html'
    ],
    'name' => $this->get('builder:name'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'type' => 'editor',
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
      'editor' => 'code',
      'mode' => 'css',
      'attrs' => [
        'debounce' => 500
      ]
    ]
  ],
  'fieldset' => [
    'default' => [
      'type' => 'tabs',
      'fields' => [
        0 => [
          'title' => 'Content',
          'fields' => [
            0 => 'content'
          ]
        ],
        1 => [
          'title' => 'Advanced',
          'fields' => [
            0 => 'name',
            1 => 'id',
            2 => 'class',
            3 => 'css'
          ]
        ]
      ]
    ]
  ]
];
