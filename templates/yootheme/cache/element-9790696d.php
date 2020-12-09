<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/table/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'table',
  'title' => 'Table',
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
    'table_order' => '1',
    'table_responsive' => 'overflow',
    'table_width_title' => 'shrink',
    'table_width_meta' => 'shrink',
    'meta_style' => 'meta',
    'link_text' => 'Read more',
    'link_style' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'table_item',
        'props' => []
      ],
      1 => [
        'type' => 'table_item',
        'props' => []
      ],
      2 => [
        'type' => 'table_item',
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
      'item' => 'table_item'
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
    'show_content' => [
      'type' => 'checkbox',
      'text' => 'Show the content'
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
    'table_style' => [
      'label' => 'Style',
      'description' => 'Select the table style.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Divider' => 'divider',
        'Striped' => 'striped'
      ]
    ],
    'table_hover' => [
      'type' => 'checkbox',
      'text' => 'Highlight the hovered row'
    ],
    'table_justify' => [
      'type' => 'checkbox',
      'text' => 'Remove left and right padding'
    ],
    'table_size' => [
      'label' => 'Size',
      'description' => 'Define the padding between table rows.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large'
      ]
    ],
    'table_order' => [
      'label' => 'Order',
      'description' => 'Define the order of the table cells.',
      'type' => 'select',
      'options' => [
        'Meta, Image, Title, Content, Link' => '1',
        'Title, Image, Meta, Content, Link' => '2',
        'Image, Title, Content, Meta, Link' => '3',
        'Image, Title, Meta, Content, Link' => '4',
        'Title, Meta, Content, Link, Image' => '5',
        'Meta, Title, Content, Link, Image' => '6'
      ]
    ],
    'table_vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically center table cells.',
      'type' => 'checkbox',
      'text' => 'Center'
    ],
    'table_responsive' => [
      'label' => 'Responsive',
      'description' => 'Stack columns on small devices or enable overflow scroll for the container.',
      'type' => 'select',
      'options' => [
        'Scroll overflow' => 'overflow',
        'Stacked' => 'responsive'
      ]
    ],
    'table_last_align' => [
      'label' => 'Last Column Alignment',
      'description' => 'Define the alignment of the last table column.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        'Left' => 'left',
        'Center' => 'center',
        'Right' => 'right'
      ]
    ],
    'table_width_title' => [
      'label' => 'Title Width',
      'description' => 'Define the width of the title cell.',
      'type' => 'select',
      'options' => [
        'Expand' => '',
        'Shrink' => 'shrink',
        'Small' => 'small',
        'Medium' => 'medium'
      ],
      'enable' => 'show_title'
    ],
    'table_width_meta' => [
      'label' => 'Meta Width',
      'description' => 'Define the width of the meta cell.',
      'type' => 'select',
      'options' => [
        'Expand' => '',
        'Shrink' => 'shrink',
        'Small' => 'small',
        'Medium' => 'medium'
      ],
      'enable' => 'show_meta'
    ],
    'table_width_content' => [
      'label' => 'Content Width',
      'description' => 'Define the width of the content cell.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Expand' => '',
        'Shrink' => 'shrink',
        'Small' => 'small',
        'Medium' => 'medium'
      ],
      'enable' => 'show_content'
    ],
    'table_head_title' => [
      'label' => 'Title',
      'description' => 'Enter a table header text for the title column.',
      'attrs' => [
        'placeholder' => 'Title'
      ],
      'enable' => 'show_title'
    ],
    'table_head_meta' => [
      'label' => 'Meta',
      'description' => 'Enter a table header text for the meta column.',
      'attrs' => [
        'placeholder' => 'Meta'
      ],
      'enable' => 'show_meta'
    ],
    'table_head_content' => [
      'label' => 'Content',
      'description' => 'Enter a table header text for the content column.',
      'attrs' => [
        'placeholder' => 'Content'
      ],
      'enable' => 'show_content'
    ],
    'table_head_image' => [
      'label' => 'Image',
      'description' => 'Enter a table header text for the image column.',
      'attrs' => [
        'placeholder' => 'Image'
      ],
      'enable' => 'show_image'
    ],
    'table_head_link' => [
      'label' => 'Link',
      'description' => 'Enter a table header text for the link column.',
      'attrs' => [
        'placeholder' => 'Link'
      ],
      'enable' => 'show_link'
    ],
    'title_style' => [
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'type' => 'select',
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
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead',
        'Meta' => 'meta'
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
    'image_box_shadow' => [
      'label' => 'Box Shadow',
      'description' => 'Select the image\'s box shadow size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
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
    'link_fullwidth' => [
      'type' => 'checkbox',
      'text' => 'Expand width to table cell',
      'enable' => 'show_link && link_style && link_style != \'link-muted\' && link_style != \'link-text\' && link_style != \'text\''
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            1 => 'show_title',
            2 => 'show_meta',
            3 => 'show_content',
            4 => 'show_image',
            5 => 'show_link'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Table',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'table_style',
                1 => 'table_hover',
                2 => 'table_justify',
                3 => 'table_size',
                4 => 'table_order',
                5 => 'table_vertical_align',
                6 => 'table_responsive',
                7 => 'table_last_align',
                8 => 'table_width_title',
                9 => 'table_width_meta',
                10 => 'table_width_content'
              ]
            ],
            1 => [
              'label' => 'Table Head',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'table_head_title',
                1 => 'table_head_meta',
                2 => 'table_head_content',
                3 => 'table_head_image',
                4 => 'table_head_link'
              ]
            ],
            2 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_style',
                1 => 'title_color'
              ]
            ],
            3 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_style',
                1 => 'meta_color'
              ]
            ],
            4 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_style'
              ]
            ],
            5 => [
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
                2 => 'image_box_shadow',
                3 => 'image_inline_svg'
              ]
            ],
            6 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_text',
                1 => 'link_target',
                2 => 'link_style',
                3 => 'link_size',
                4 => 'link_fullwidth'
              ]
            ],
            7 => [
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
