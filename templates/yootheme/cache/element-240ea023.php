<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/icon/element.json

return [
  'name' => 'icon',
  'title' => 'Icon',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'icon' => 'star',
    'icon_ratio' => 3,
    'margin' => 'default'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'icon' => [
      'label' => 'Icon',
      'description' => 'Click on the pencil to pick an icon from the SVG gallery.',
      'type' => 'icon'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target'),
    'icon_color' => [
      'label' => 'Color',
      'description' => 'Select the icon\'s color.',
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
      'enable' => '!link'
    ],
    'icon_ratio' => [
      'label' => 'Size',
      'description' => 'Enter a size ratio, if you want the icon to appear larger than the default font size, for example 1.5 or 2 to double the size.',
      'attrs' => [
        'placeholder' => '1'
      ],
      'enable' => 'link_style != \'button\''
    ],
    'link_style' => [
      'label' => 'Style',
      'description' => 'Set the link style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Button' => 'button',
        'Link' => 'link',
        'Link Muted' => 'muted',
        'Link Text' => 'text',
        'Link Reset' => 'reset'
      ],
      'enable' => 'link'
    ],
    'text_align' => $this->get('builder:text_align'),
    'text_align_breakpoint' => $this->get('builder:text_align_breakpoint'),
    'text_align_fallback' => $this->get('builder:text_align_fallback'),
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
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
            0 => 'icon',
            1 => 'link',
            2 => 'link_target'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Icon',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'icon_color',
                1 => 'icon_ratio'
              ]
            ],
            1 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_style'
              ]
            ],
            2 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'text_align',
                1 => 'text_align_breakpoint',
                2 => 'text_align_fallback',
                3 => 'maxwidth',
                4 => 'maxwidth_align',
                5 => 'maxwidth_breakpoint',
                6 => 'margin',
                7 => 'margin_remove_top',
                8 => 'margin_remove_bottom',
                9 => 'animation',
                10 => '_parallax_button',
                11 => 'visibility'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
