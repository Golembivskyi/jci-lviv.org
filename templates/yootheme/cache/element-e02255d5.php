<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/alert/element.json

return [
  'name' => 'alert',
  'title' => 'Alert',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'placeholder' => [
    'props' => [
      'title' => '',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
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
    'alert_style' => [
      'label' => 'Style',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger'
      ]
    ],
    'alert_size' => [
      'type' => 'checkbox',
      'text' => 'Larger padding'
    ],
    'maxwidth' => $this->get('builder:maxwidth'),
    'maxwidth_align' => $this->get('builder:maxwidth_align'),
    'maxwidth_breakpoint' => $this->get('builder:maxwidth_breakpoint'),
    'margin' => $this->get('builder:margin'),
    'margin_remove_top' => $this->get('builder:margin_remove_top'),
    'margin_remove_bottom' => $this->get('builder:margin_remove_bottom'),
    'animation' => $this->get('builder:animation'),
    '_parallax_button' => $this->get('builder:_parallax_button'),
    'visibility' => $this->get('builder:visibility'),
    'name' => $this->get('builder:name'),
    'status' => $this->get('builder:status'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>, <code>.el-content</code>',
      'type' => 'editor',
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
            0 => 'title',
            1 => 'content'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Alert',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'alert_style',
                1 => 'alert_size'
              ]
            ],
            1 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'maxwidth',
                1 => 'maxwidth_align',
                2 => 'maxwidth_breakpoint',
                3 => 'margin',
                4 => 'margin_remove_top',
                5 => 'margin_remove_bottom',
                6 => 'animation',
                7 => '_parallax_button',
                8 => 'visibility'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
