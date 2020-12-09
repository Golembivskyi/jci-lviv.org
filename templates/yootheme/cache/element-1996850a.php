<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/text/element.json

return [
  'name' => 'text',
  'title' => 'Text',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'margin' => 'default',
    'column_breakpoint' => 'm'
  ],
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
      'editor' => 'text'
    ],
    'dropcap' => [
      'label' => 'Drop Cap',
      'description' => 'Display the first letter of the paragraph as a large initial.',
      'type' => 'checkbox',
      'text' => 'Enable drop cap'
    ],
    'text_style' => [
      'label' => 'Text Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead',
        'Meta' => 'meta'
      ]
    ],
    'text_color' => [
      'label' => 'Text Color',
      'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
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
      'show' => '!text_style'
    ],
    'text_size' => [
      'label' => 'Text Size',
      'description' => 'Select the text size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large'
      ],
      'show' => '!text_style'
    ],
    'column' => [
      'label' => 'Columns',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Halves' => '1-2',
        'Thirds' => '1-3',
        'Quarters' => '1-4',
        'Fifths' => '1-5',
        'Sixths' => '1-6'
      ]
    ],
    'column_divider' => [
      'description' => 'Choose whether you want to apply a multi-column layout for the text.',
      'type' => 'checkbox',
      'text' => 'Show dividers between the text columns',
      'show' => 'column'
    ],
    'column_breakpoint' => [
      'label' => 'Columns Breakpoint',
      'description' => 'Set the device width from which the text columns should apply. Note: For each breakpoint downward the number of columns will be reduced by one.',
      'type' => 'select',
      'options' => [
        'Always' => '',
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l',
        'X-Large (Large Screens)' => 'xl'
      ],
      'show' => 'column'
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
            0 => 'content'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Text',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'dropcap',
                1 => 'text_style',
                2 => 'text_color',
                3 => 'text_size',
                4 => 'column',
                5 => 'column_divider',
                6 => 'column_breakpoint'
              ]
            ],
            1 => [
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
