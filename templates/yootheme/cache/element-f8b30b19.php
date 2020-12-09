<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/popover/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'popover',
  'title' => 'Popover',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_title' => true,
    'show_meta' => true,
    'show_content' => true,
    'show_image' => true,
    'show_link' => true,
    'icon' => 'plus',
    'drop_mode' => 'hover',
    'drop_position' => 'top-center',
    'card_style' => 'default',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'image_card' => true,
    'link_text' => 'Read more',
    'link_style' => 'default',
    'margin' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'popover_item',
        'props' => [
          'position_x' => 20,
          'position_y' => 50
        ]
      ],
      1 => [
        'type' => 'popover_item',
        'props' => [
          'position_x' => 50,
          'position_y' => 20
        ]
      ],
      2 => [
        'type' => 'popover_item',
        'props' => [
          'position_x' => 70,
          'position_y' => 70
        ]
      ]
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'background_image' => [
      'label' => 'Image',
      'type' => 'image'
    ],
    'background_image_width' => [
      'label' => 'Image Width',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'background_image'
    ],
    'background_image_height' => [
      'label' => 'Image Height',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'background_image'
    ],
    'background_image_alt' => [
      'label' => 'Image Alt',
      'enable' => 'background_image'
    ],
    'content' => [
      'label' => 'Items',
      'type' => 'content-items',
      'item' => 'popover_item',
      'media' => [
        'type' => 'image',
        'item' => [
          'background_image_alt' => 'title',
          'background_image' => 'src'
        ]
      ]
    ],
    'show_title' => [
      'label' => 'Display',
      'type' => 'checkbox',
      'text' => 'Show the title'
    ],
    'show_meta' => [
      'type' => 'checkbox',
      'text' => 'Show the meta text'
    ],
    'show_image' => [
      'type' => 'checkbox',
      'text' => 'Show the image'
    ],
    'show_content' => [
      'type' => 'checkbox',
      'text' => 'Show the content'
    ],
    'show_link' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'drop_mode' => [
      'label' => 'Mode',
      'description' => 'Display the popover on click or hover.',
      'type' => 'select',
      'options' => [
        'Click' => 'click',
        'Hover' => 'hover'
      ]
    ],
    'drop_position' => [
      'label' => 'Position',
      'description' => 'Select the popover\'s alignment to its marker. If the popover doesn\'t fit its container, it will flip automatically.',
      'type' => 'select',
      'options' => [
        'Top' => 'top-center',
        'Bottom' => 'bottom-center',
        'Left' => 'left-center',
        'Right' => 'right-center'
      ]
    ],
    'drop_width' => [
      'label' => 'Width',
      'description' => 'Enter a width for the popover in pixel.',
      'attrs' => [
        'placeholder' => '300'
      ]
    ],
    'card_style' => [
      'label' => 'Style',
      'description' => 'Select a card style.',
      'type' => 'select',
      'options' => [
        'Default' => 'default',
        'Primary' => 'primary',
        'Secondary' => 'secondary'
      ]
    ],
    'card_size' => [
      'label' => 'Size',
      'description' => 'Define the card\'s size by selecting the padding between the card and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Large' => 'large'
      ]
    ],
    'title_style' => [
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_title'
    ],
    'title_decoration' => [
      'label' => 'Decoration',
      'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Divider' => 'divider',
        'Bullet' => 'bullet',
        'Line' => 'line'
      ],
      'enable' => 'show_title'
    ],
    'title_color' => [
      'label' => 'Color',
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
        'Danger' => 'danger',
        'Background' => 'background'
      ],
      'enable' => 'show_title'
    ],
    'title_element' => [
      'label' => 'HTML Element',
      'description' => 'Choose one of the six heading elements to fit your semantic structure.',
      'type' => 'select',
      'options' => [
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_title'
    ],
    'meta_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined meta text style, including color, size and font-family.',
      'type' => 'select',
      'options' => [
        'Default' => '',
        'Meta' => 'meta',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'show_meta'
    ],
    'meta_color' => [
      'label' => 'Color',
      'description' => 'Select the text color.',
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
      'enable' => 'show_meta'
    ],
    'meta_align' => [
      'label' => 'Alignment',
      'description' => 'Align the meta text above or below the title.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom'
      ],
      'enable' => 'show_meta'
    ],
    'meta_margin' => [
      'label' => 'Margin',
      'description' => 'Set the margin between title and meta text.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'None' => 'remove'
      ],
      'enable' => 'show_meta'
    ],
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead'
      ],
      'enable' => 'show_content'
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
    'image_card' => [
      'label' => 'Padding',
      'description' => 'Attach the image to the drop\'s edge.',
      'type' => 'checkbox',
      'text' => 'Align image without padding',
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
      'enable' => 'show_image && !image_card'
    ],
    'image_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS',
      'enable' => 'show_image'
    ],
    'image_animate_svg' => [
      'type' => 'checkbox',
      'text' => 'Animate strokes',
      'enable' => 'show_image && image_inline_svg'
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
        'Button Text' => 'text',
        'Card' => 'card'
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
      'enable' => 'show_link && link_style && link_style != \'link-muted\' && link_style != \'link-text\' && link_style != \'card\''
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
    'container_padding_remove' => $this->get('builder:container_padding_remove'),
    'name' => $this->get('builder:name'),
    'status' => $this->get('builder:status'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-marker</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            0 => 'background_image',
            1 => [
              'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
              'name' => '_background_image_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'background_image_width',
                1 => 'background_image_height'
              ]
            ],
            2 => 'background_image_alt',
            3 => 'content',
            4 => 'show_title',
            5 => 'show_meta',
            6 => 'show_image',
            7 => 'show_content',
            8 => 'show_link'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Popover',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'drop_mode',
                1 => 'drop_position',
                2 => 'drop_width',
                3 => 'card_style',
                4 => 'card_size'
              ]
            ],
            1 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_style',
                1 => 'title_decoration',
                2 => 'title_color',
                3 => 'title_element'
              ]
            ],
            2 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_style',
                1 => 'meta_color',
                2 => 'meta_align',
                3 => 'meta_margin'
              ]
            ],
            3 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_style'
              ]
            ],
            4 => [
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
                1 => 'image_card',
                2 => 'image_border',
                3 => 'image_inline_svg',
                4 => 'image_animate_svg'
              ]
            ],
            5 => [
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
            6 => [
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
                11 => 'visibility',
                12 => 'container_padding_remove'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
