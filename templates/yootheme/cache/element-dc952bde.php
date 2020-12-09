<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/countdown/element.json

return [
  'name' => 'countdown',
  'title' => 'Countdown',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'show_separator' => true,
    'show_label' => true,
    'gutter' => 'small',
    'label_margin' => 'small',
    'margin' => 'default'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'date' => [
      'label' => 'Date',
      'description' => 'Enter a date for the countdown to expire. Use the <a href="https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Date/parse#ECMAScript_5_ISO-8601_format_support" target="_blank">ISO 8601 format</a>: <code>YYYY-MM-DDThh:mm:ssTZD</code>, e.g. <code>2017-05-01T22:00:00+00:00</code> (UTC time).',
      'type' => 'text',
      'attrs' => []
    ],
    'label_days' => [
      'label' => 'Labels',
      'attrs' => [
        'placeholder' => 'Days'
      ]
    ],
    'label_hours' => [
      'attrs' => [
        'placeholder' => 'Hours'
      ]
    ],
    'label_minutes' => [
      'attrs' => [
        'placeholder' => 'Minutes'
      ]
    ],
    'label_seconds' => [
      'attrs' => [
        'placeholder' => 'Seconds'
      ]
    ],
    'show_label' => [
      'description' => 'Enter labels for the countdown time.',
      'type' => 'checkbox',
      'text' => 'Show Labels'
    ],
    'gutter' => [
      'label' => 'Gutter',
      'description' => 'Set a gutter between the numbers and add optional separators.',
      'type' => 'select',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ]
    ],
    'show_separator' => [
      'type' => 'checkbox',
      'text' => 'Show Separators'
    ],
    'label_margin' => [
      'label' => 'Label Margin',
      'description' => 'Set the margin between the countdown and the label text.',
      'type' => 'select',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'None' => 'remove'
      ],
      'enable' => 'show_label'
    ],
    'text_align' => $this->get('builder:text_align'),
    'text_align_breakpoint' => $this->get('builder:text_align_breakpoint'),
    'text_align_fallback' => $this->get('builder:text_align_fallback'),
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
            0 => 'date',
            1 => 'label_days',
            2 => 'label_hours',
            3 => 'label_minutes',
            4 => 'label_seconds',
            5 => 'show_label'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Countdown',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'gutter',
                1 => 'show_separator',
                2 => 'label_margin'
              ]
            ],
            1 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'text_align',
                1 => 'text_align_breakpoint',
                2 => 'text_align_fallback',
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
