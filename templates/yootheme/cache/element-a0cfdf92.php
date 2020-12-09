<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/accordion/element.json

return [
  'name' => 'accordion',
  'title' => 'Accordion',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_image' => true,
    'show_link' => true,
    'collapsible' => true,
    'image_align' => 'top',
    'image_grid_width' => '1-2',
    'image_breakpoint' => 'm',
    'link_text' => 'Read more',
    'link_style' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'accordion_item',
        'props' => []
      ],
      1 => [
        'type' => 'accordion_item',
        'props' => []
      ],
      2 => [
        'type' => 'accordion_item',
        'props' => []
      ]
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Items',
      'type' => 'content-items',
      'item' => 'accordion_item',
      'media' => [
        'type' => 'image',
        'item' => [
          'title' => 'title',
          'image' => 'src'
        ]
      ]
    ],
    'show_image' => [
      'type' => 'checkbox',
      'text' => 'Show the image'
    ],
    'show_link' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'multiple' => [
      'label' => 'Behavior',
      'type' => 'checkbox',
      'text' => 'Allow multiple open items'
    ],
    'collapsible' => [
      'type' => 'checkbox',
      'text' => 'Allow all items to be closed'
    ],
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead'
      ]
    ],
    'image_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'show_image'
    ],
    'image_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'show_image'
    ],
    'image_border' => [
      'label' => 'Border',
      'description' => 'Select the image\'s border style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Rounded' => 'rounded',
        'Circle' => 'circle',
        'Pill' => 'pill'
      ],
      'enable' => 'show_image'
    ],
    'image_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS',
      'enable' => 'show_image'
    ],
    'image_align' => [
      'label' => 'Alignment',
      'description' => 'Align the image to the top, left, right or place it between the title and the content.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right'
      ],
      'enable' => 'show_image'
    ],
    'image_grid_width' => [
      'label' => 'Grid Width',
      'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
      'type' => 'select',
      'options' => [
        'Auto' => 'auto',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'XX-Large' => 'xxlarge'
      ],
      'enable' => 'show_image && (image_align == \'left\' || image_align == \'right\')'
    ],
    'image_gutter' => [
      'label' => 'Grid Gutter',
      'description' => 'Select the gutter width between the image and content items.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ],
      'enable' => 'show_image && (image_align == \'left\' || image_align == \'right\')'
    ],
    'image_breakpoint' => [
      'label' => 'Grid Breakpoint',
      'description' => 'Set the breakpoint from which grid cells will stack.',
      'type' => 'select',
      'options' => [
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l'
      ],
      'enable' => 'show_image && (image_align == \'left\' || image_align == \'right\')'
    ],
    'image_vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically center grid cells.',
      'type' => 'checkbox',
      'text' => 'Center',
      'enable' => 'show_image && (image_align == \'left\' || image_align == \'right\')'
    ],
    'link_text' => [
      'label' => 'Text',
      'description' => 'Enter the text for the link.',
      'enable' => 'show_link'
    ],
    'link_target' => [
      'type' => 'checkbox',
      'text' => 'Open in a new window',
      'enable' => 'show_link'
    ],
    'link_style' => [
      'label' => 'Style',
      'description' => 'Set the link style.',
      'type' => 'select',
      'options' => [
        'Link' => '',
        'Link Muted' => 'link-muted',
        'Link Text' => 'link-text',
        'Button Default' => 'default',
        'Button Primary' => 'primary',
        'Button Secondary' => 'secondary',
        'Button Danger' => 'danger',
        'Button Text' => 'text'
      ],
      'enable' => 'show_link'
    ],
    'link_size' => [
      'label' => 'Button Size',
      'description' => 'Set the button size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Large' => 'large'
      ],
      'enable' => 'show_link && link_style && link_style != \'link-muted\' && link_style != \'link-text\''
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            0 => 'content',
            1 => 'show_image',
            2 => 'show_link'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Accordion',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'multiple',
                1 => 'collapsible'
              ]
            ],
            1 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_style'
              ]
            ],
            2 => [
              'label' => 'Image',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => [
                  'label' => 'Width/Height',
                  'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'image_width',
                    1 => 'image_height'
                  ]
                ],
                1 => 'image_border',
                2 => 'image_inline_svg',
                3 => 'image_align',
                4 => 'image_grid_width',
                5 => 'image_gutter',
                6 => 'image_breakpoint',
                7 => 'image_vertical_align'
              ]
            ],
            3 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_text',
                1 => 'link_target',
                2 => 'link_style',
                3 => 'link_size'
              ]
            ],
            4 => [
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
