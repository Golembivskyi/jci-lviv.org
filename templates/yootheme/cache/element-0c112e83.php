<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder-joomla/elements/joomla_module/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'joomla_module',
  'title' => 'J! Module',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php"
  ],
  'fields' => [
    'module' => [
      'type' => 'select-module',
      'label' => 'Module',
      'description' => 'Any Joomla module can be displayed in your custom layout.',
      'default' => ''
    ],
    'style' => [
      'type' => 'select',
      'label' => 'Style',
      'description' => 'Select one of the boxed card styles or a blank module.',
      'default' => '',
      'options' => [
        'Blank' => '',
        'Card Default' => 'card-default',
        'Card Primary' => 'card-primary',
        'Card Secondary' => 'card-secondary',
        'Card Hover' => 'card-hover'
      ]
    ],
    'title_style' => [
      'type' => 'select',
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'default' => '',
      'options' => [
        'Default' => '',
        'Primary' => 'heading-primary',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ]
    ],
    'title_decoration' => [
      'type' => 'select',
      'label' => 'Decoration',
      'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
      'default' => '',
      'options' => [
        'None' => '',
        'Divider' => 'divider',
        'Bullet' => 'bullet',
        'Line' => 'line'
      ]
    ],
    'title_color' => [
      'type' => 'select',
      'label' => 'Color',
      'description' => 'Select the text color. If the background option is selected, styles that don\'t apply a background image use the primary color instead.',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger',
        'Background' => 'background'
      ]
    ],
    'list_style' => [
      'label' => 'List Style',
      'description' => 'Select the list style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Divider' => 'divider'
      ],
      'enable' => '$match(type, \'articles_archive|articles_categories|articles_latest|articles_popular|tags_popular|tags_similar\')'
    ],
    'link_style' => [
      'label' => 'Link Style',
      'description' => 'Select the link style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted'
      ],
      'enable' => '$match(type, \'articles_archive|articles_categories|articles_latest|articles_popular|tags_popular|tags_similar\')'
    ],
    'menu_style' => [
      'label' => 'Style',
      'description' => 'Select the menu style',
      'type' => 'select',
      'default' => 'nav',
      'options' => [
        'Nav' => 'nav',
        'Subnav' => 'subnav'
      ],
      'enable' => '$match(type, \'menu\')'
    ],
    'text_align' => $this->get('builder:text_align_justify'),
    'text_align_breakpoint' => $this->get('builder:text_align_breakpoint'),
    'text_align_fallback' => $this->get('builder:text_align_justify_fallback'),
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>',
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
            0 => 'module'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'type' => 'group',
              'label' => 'Panel',
              'divider' => true,
              'fields' => [
                0 => 'style'
              ]
            ],
            1 => [
              'type' => 'group',
              'label' => 'Title',
              'divider' => true,
              'fields' => [
                0 => 'title_style',
                1 => 'title_decoration',
                2 => 'title_color'
              ]
            ],
            2 => [
              'type' => 'group',
              'label' => 'List',
              'divider' => true,
              'fields' => [
                0 => 'list_style',
                1 => 'link_style'
              ]
            ],
            3 => [
              'type' => 'group',
              'label' => 'Menu',
              'divider' => true,
              'fields' => [
                0 => 'menu_style'
              ]
            ],
            4 => [
              'type' => 'group',
              'label' => 'General',
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
        2 => [
          'title' => 'Advanced',
          'fields' => [
            0 => 'name',
            1 => 'status',
            2 => 'id',
            3 => 'class',
            4 => 'css'
          ]
        ]
      ]
    ]
  ]
];
