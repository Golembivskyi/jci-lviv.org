<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/switcher/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'switcher',
  'title' => 'Switcher',
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
    'show_label' => true,
    'show_thumbnail' => true,
    'switcher_style' => 'tab',
    'switcher_position' => 'top',
    'switcher_align' => 'left',
    'switcher_grid_width' => 'auto',
    'switcher_breakpoint' => 'm',
    'switcher_animation' => 'fade',
    'switcher_height' => true,
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'image_align' => 'top',
    'image_grid_width' => '1-2',
    'image_breakpoint' => 'm',
    'switcher_thumbnail_width' => '100',
    'switcher_thumbnail_height' => '75',
    'link_text' => 'Read more',
    'link_style' => 'default',
    'margin' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'switcher_item',
        'props' => []
      ],
      1 => [
        'type' => 'switcher_item',
        'props' => []
      ],
      2 => [
        'type' => 'switcher_item',
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
      'item' => 'switcher_item',
      'media' => [
        'type' => 'image',
        'item' => [
          'title' => 'title',
          'image' => 'src'
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
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'show_label' => [
      'type' => 'checkbox',
      'text' => 'Show the navigation label instead of title'
    ],
    'show_thumbnail' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the navigation thumbnail instead of the image'
    ],
    'switcher_style' => [
      'label' => 'Navigation',
      'description' => 'Select the navigation style. The pill and divider styles are only available for horizontal Subnavs.',
      'type' => 'select',
      'options' => [
        'Tabs' => 'tab',
        'Subnav Pill (Nav)' => 'subnav-pill',
        'Subnav Divider (Nav)' => 'subnav-divider',
        'Subnav (Nav)' => 'subnav',
        'Thumbnav' => 'thumbnav'
      ]
    ],
    'switcher_thumbnail_nowrap' => [
      'label' => 'Thumbnail Wrap',
      'description' => 'Define whether thumbnails wrap into multiple lines or not if the container is too small.',
      'type' => 'checkbox',
      'text' => 'Don\'t wrap into multiple lines',
      'enable' => 'switcher_style == \'thumbnav\' && show_thumbnail'
    ],
    'switcher_thumbnail_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'switcher_style == \'thumbnav\' && show_thumbnail'
    ],
    'switcher_thumbnail_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'switcher_style == \'thumbnav\' && show_thumbnail'
    ],
    'switcher_thumbnail_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS',
      'enable' => 'switcher_style == \'thumbnav\' && show_thumbnail'
    ],
    'switcher_position' => [
      'label' => 'Position',
      'description' => 'Position the navigation at the top, bottom, left or right. A larger style can be applied to left and right navigations.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right'
      ]
    ],
    'switcher_style_primary' => [
      'type' => 'checkbox',
      'text' => 'Primary navigation',
      'enable' => '(switcher_position == \'left\' || switcher_position == \'right\') && $match(switcher_style, \'(^subnav)\')'
    ],
    'switcher_align' => [
      'label' => 'Alignment',
      'description' => 'Align the navigation\'s items.',
      'type' => 'select',
      'options' => [
        'Left' => 'left',
        'Right' => 'right',
        'Center' => 'center',
        'Justify' => 'justify'
      ],
      'enable' => 'switcher_position == \'top\' || switcher_position == \'bottom\''
    ],
    'switcher_margin' => [
      'label' => 'Margin',
      'description' => 'Set the vertical margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => 'switcher_position == \'top\' || switcher_position == \'bottom\''
    ],
    'switcher_grid_width' => [
      'label' => 'Grid Width',
      'description' => 'Define the width of the navigation. Choose between percent and fixed widths or expand columns to the width of their content.',
      'type' => 'select',
      'options' => [
        'Auto' => 'auto',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'switcher_position == \'left\' || switcher_position == \'right\''
    ],
    'switcher_gutter' => [
      'label' => 'Grid Gutter',
      'description' => 'Select the gutter width between the navigation and content items.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ],
      'enable' => 'switcher_position == \'left\' || switcher_position == \'right\''
    ],
    'switcher_breakpoint' => [
      'label' => 'Grid Breakpoint',
      'description' => 'Set the breakpoint from which the navigation and content will stack.',
      'type' => 'select',
      'options' => [
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l'
      ],
      'enable' => 'switcher_position == \'left\' || switcher_position == \'right\''
    ],
    'switcher_vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically center the navigation and content.',
      'type' => 'checkbox',
      'text' => 'Center',
      'enable' => 'switcher_position == \'left\' || switcher_position == \'right\''
    ],
    'switcher_animation' => [
      'label' => 'Animation',
      'description' => 'Select an animation that will be applied to the content items when toggling between them.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ]
    ],
    'switcher_height' => [
      'label' => 'Match Height',
      'description' => 'Extend all content items to the same height.',
      'type' => 'checkbox',
      'text' => 'Match content height'
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
      'label' => 'Image Box Shadow',
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
    'image_box_decoration' => [
      'label' => 'Box Decoration',
      'description' => 'Select the image\'s box decoration style. Note: The Mask option is not supported by all styles and may have no visible effect.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Primary' => 'primary',
        'Secondary' => 'secondary',
        'Floating Shadow' => 'shadow',
        'Mask' => 'mask'
      ],
      'enable' => 'show_image'
    ],
    'image_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => 'show_image && $match(image_box_decoration, \'^(default|primary|secondary)$\')'
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            3 => 'show_image',
            4 => 'show_content',
            5 => 'show_link',
            6 => 'show_label',
            7 => 'show_thumbnail'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Switcher',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'switcher_style',
                1 => 'switcher_thumbnail_nowrap',
                2 => [
                  'label' => 'Thumbnail Width/Height',
                  'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'switcher_thumbnail_width',
                    1 => 'switcher_thumbnail_height'
                  ]
                ],
                3 => 'switcher_thumbnail_inline_svg',
                4 => 'switcher_position',
                5 => 'switcher_style_primary',
                6 => 'switcher_align',
                7 => 'switcher_margin',
                8 => 'switcher_grid_width',
                9 => 'switcher_gutter',
                10 => 'switcher_breakpoint',
                11 => 'switcher_vertical_align',
                12 => 'switcher_animation',
                13 => 'switcher_height'
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
                1 => 'image_border',
                2 => 'image_box_shadow',
                3 => 'image_box_decoration',
                4 => 'image_box_decoration_inverse',
                5 => 'image_inline_svg',
                6 => 'image_align',
                7 => 'image_grid_width',
                8 => 'image_gutter',
                9 => 'image_breakpoint',
                10 => 'image_vertical_align'
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
