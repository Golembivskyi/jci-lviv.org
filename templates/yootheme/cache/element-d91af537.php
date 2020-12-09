<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder-newsletter/elements/newsletter/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'newsletter',
  'title' => 'Newsletter',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'layout' => 'grid',
    'show_name' => true,
    'label_first_name' => 'First name',
    'label_last_name' => 'Last name',
    'label_email' => 'Email address',
    'label_button' => 'Subscribe',
    'provider' => [
      'name' => 'mailchimp',
      'after_submit' => 'message',
      'message' => 'You\'ve been subscribed successfully.',
      'redirect' => ''
    ],
    'mailchimp' => [
      'client_id' => '',
      'list_id' => '',
      'double_optin' => true
    ],
    'cmonitor' => [
      'client_id' => '',
      'list_id' => ''
    ],
    'button_mode' => 'button',
    'button_style' => 'default',
    'button_icon' => 'mail'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php"
  ],
  'fields' => [
    'provider.name' => [
      'label' => 'Provider',
      'type' => 'select',
      'options' => [
        'Mailchimp' => 'mailchimp',
        'Campaign Monitor' => 'cmonitor'
      ]
    ],
    'mailchimp' => [
      'label' => 'Mailchimp',
      'type' => 'newsletter-lists',
      'provider' => 'mailchimp',
      'show' => 'provider.name == \'mailchimp\''
    ],
    'mailchimp.double_optin' => [
      'label' => 'Double opt-in',
      'type' => 'checkbox',
      'text' => 'Use double opt-in.',
      'show' => 'provider.name == \'mailchimp\''
    ],
    'cmonitor' => [
      'label' => 'Campaign Monitor',
      'type' => 'newsletter-lists',
      'provider' => 'cmonitor',
      'show' => 'provider.name == \'cmonitor\''
    ],
    'provider.after_submit' => [
      'label' => 'After Submit',
      'description' => 'Select whether a message will be shown or the site will be redirected after clicking the subscribe button.',
      'type' => 'select',
      'options' => [
        'Show message' => 'message',
        'Redirect' => 'redirect'
      ]
    ],
    'provider.message' => [
      'label' => 'Message',
      'description' => 'Message shown to the user after submit.',
      'type' => 'textarea',
      'attrs' => [
        'rows' => 4
      ],
      'show' => 'provider.after_submit == \'message\''
    ],
    'provider.redirect' => [
      'label' => 'Link',
      'description' => 'Link to redirect to after submit.',
      'type' => 'link',
      'filePicker' => false,
      'show' => 'provider.after_submit == \'redirect\''
    ],
    'layout' => [
      'label' => 'Layout',
      'description' => 'Define the layout of the form.',
      'type' => 'select',
      'options' => [
        'Grid' => 'grid',
        'Stacked' => 'stacked',
        'Stacked (Name fields as grid)' => 'stacked-name'
      ]
    ],
    'show_name' => [
      'type' => 'checkbox',
      'text' => 'Show name fields'
    ],
    'gutter' => [
      'label' => 'Gutter',
      'description' => 'Set the gutter for the form fields.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => ''
      ]
    ],
    'form_size' => [
      'label' => 'Size',
      'description' => 'Select the form size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Large' => 'large'
      ]
    ],
    'form_style' => [
      'label' => 'Style',
      'description' => 'Select the form style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Blank' => 'blank'
      ]
    ],
    'label_email' => [
      'label' => 'Email',
      'attrs' => [
        'placeholder' => 'Email address'
      ]
    ],
    'label_button' => [
      'label' => 'Button',
      'attrs' => [
        'placeholder' => 'Submit'
      ]
    ],
    'label_first_name' => [
      'label' => 'First name',
      'attrs' => [
        'placeholder' => 'First name'
      ],
      'enable' => 'show_name'
    ],
    'label_last_name' => [
      'label' => 'Last name',
      'attrs' => [
        'placeholder' => 'Last name'
      ],
      'enable' => 'show_name'
    ],
    'button_mode' => [
      'label' => 'Mode',
      'description' => 'Select whether a button or a clickable icon inside the email input is shown.',
      'type' => 'select',
      'options' => [
        'Button' => 'button',
        'Icon' => 'icon'
      ]
    ],
    'button_style' => [
      'label' => 'Style',
      'description' => 'Set the button style.',
      'type' => 'select',
      'options' => [
        'Default' => 'default',
        'Primary' => 'primary',
        'Secondary' => 'secondary',
        'Danger' => 'danger',
        'Text' => 'text'
      ],
      'enable' => 'button_mode == \'button\''
    ],
    'button_fullwidth' => [
      'type' => 'checkbox',
      'text' => 'Full width button',
      'enable' => 'button_mode == \'button\' && layout != \'grid\''
    ],
    'button_margin' => [
      'label' => 'Extra Margin',
      'description' => 'Add extra margin to the button.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'default'
      ],
      'enable' => 'button_mode == \'button\' && show_name'
    ],
    'button_icon' => [
      'label' => 'Icon',
      'description' => 'Click on the pencil to pick an icon from the SVG gallery.',
      'type' => 'icon',
      'enable' => 'button_mode == \'icon\''
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-input</code>, <code>.el-button</code>',
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
            0 => 'provider.name',
            1 => 'mailchimp',
            2 => 'mailchimp.double_optin',
            3 => 'cmonitor',
            4 => 'provider.after_submit',
            5 => 'provider.message',
            6 => 'provider.redirect'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Form',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'layout',
                1 => 'show_name',
                2 => 'gutter',
                3 => 'form_size',
                4 => 'form_style'
              ]
            ],
            1 => [
              'label' => 'Labels',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'label_email',
                1 => 'label_button',
                2 => 'label_first_name',
                3 => 'label_last_name'
              ]
            ],
            2 => [
              'label' => 'Button',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'button_mode',
                1 => 'button_style',
                2 => 'button_fullwidth',
                3 => 'button_margin',
                4 => 'button_icon'
              ]
            ],
            3 => [
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
