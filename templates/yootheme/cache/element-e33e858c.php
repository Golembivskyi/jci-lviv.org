<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/panel/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'panel',
  'title' => 'Panel',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'link_text' => 'Read more',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'icon_ratio' => 4,
    'image_align' => 'top',
    'image_grid_width' => '1-2',
    'image_breakpoint' => 'm',
    'link_style' => 'default',
    'margin' => 'default'
  ],
  'placeholder' => [
    'props' => [
      'title' => 'Title',
      'meta' => '',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      'image' => '',
      'icon' => ''
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
    'meta' => [
      'label' => 'Meta'
    ],
    'content' => [
      'label' => 'Content',
      'type' => 'editor'
    ],
    'image' => $this->get('builder:image'),
    'image_width' => [
      'label' => 'Width',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'image'
    ],
    'image_height' => [
      'label' => 'Height',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'image'
    ],
    'image_alt' => [
      'label' => 'Image Alt',
      'enable' => 'image'
    ],
    'icon' => [
      'label' => 'Icon',
      'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
      'type' => 'icon',
      'enable' => '!image'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target'),
    'link_text' => [
      'label' => 'Link Text',
      'description' => 'Enter the text for the link.',
      'enable' => 'link'
    ],
    'panel_style' => [
      'label' => 'Style',
      'description' => 'Select one of the boxed card styles or a blank panel.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Card Default' => 'card-default',
        'Card Primary' => 'card-primary',
        'Card Secondary' => 'card-secondary',
        'Card Hover' => 'card-hover'
      ]
    ],
    'panel_size' => [
      'label' => 'Size',
      'description' => 'Define the card\'s size by selecting the padding between the card and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Large' => 'large'
      ],
      'enable' => 'panel_style'
    ],
    'title_style' => [
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Hero' => 'heading-hero',
        'Primary' => 'heading-primary',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'title'
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
      'enable' => 'title'
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
      'enable' => 'title'
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
      'enable' => 'title'
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
      'enable' => 'meta'
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
      'enable' => 'meta'
    ],
    'meta_align' => [
      'label' => 'Alignment',
      'description' => 'Align the meta text above or below the title.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom'
      ],
      'enable' => 'meta'
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
      'enable' => 'meta'
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
      'enable' => 'content'
    ],
    'image_card' => [
      'label' => 'Padding',
      'description' => 'Top, left or right aligned images can be attached to the card\'s edge. If the image is aligned to the left or right, it will also extend to cover the whole space.',
      'type' => 'checkbox',
      'text' => 'Align image without padding',
      'enable' => 'image && panel_style && image_align != \'between\''
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
      'enable' => 'image && !panel_style'
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
      'enable' => 'image && !panel_style'
    ],
    'image_hover_box_shadow' => [
      'label' => 'Hover Box Shadow',
      'description' => 'Select the image\'s box shadow size on hover.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => 'link && image && !panel_style && link_style == \'panel\''
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
      'enable' => 'image && !panel_style'
    ],
    'image_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => 'image && !panel_style && $match(image_box_decoration, \'^(default|primary|secondary)$\')'
    ],
    'icon_ratio' => $this->get('builder:icon_ratio'),
    'icon_color' => $this->get('builder:icon_color'),
    'image_align' => [
      'label' => 'Alignment',
      'description' => 'Align the image to the top, left, right or place it between the title and the content.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right',
        'Between' => 'between'
      ],
      'enable' => 'image || icon'
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
      'enable' => '(image || icon) && (image_align == \'left\' || image_align == \'right\')'
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
      'enable' => '(image || icon) && (image_align == \'left\' || image_align == \'right\') && !(image_card && panel_style)'
    ],
    'image_breakpoint' => [
      'label' => 'Grid Breakpoint',
      'description' => 'Set the breakpoint from which grid cells will stack.',
      'type' => 'select',
      'options' => [
        'Always' => '',
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l'
      ],
      'enable' => '(image || icon) && (image_align == \'left\' || image_align == \'right\')'
    ],
    'image_vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically center grid cells.',
      'type' => 'checkbox',
      'text' => 'Center',
      'enable' => '(image || icon) && (image_align == \'left\' || image_align == \'right\')'
    ],
    'image_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS',
      'enable' => 'image'
    ],
    'image_animate_svg' => [
      'type' => 'checkbox',
      'text' => 'Animate strokes',
      'enable' => 'image && image_inline_svg'
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
        'Image/Card' => 'panel'
      ],
      'enable' => 'link'
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
      'enable' => 'link && link_style && link_style != \'link-muted\' && link_style != \'link-text\' && link_style != \'panel\''
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            1 => 'meta',
            2 => 'content',
            3 => 'image',
            4 => [
              'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
              'name' => '_image_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'image_width',
                1 => 'image_height'
              ]
            ],
            5 => 'image_alt',
            6 => 'icon',
            7 => 'link',
            8 => 'link_target',
            9 => 'link_text'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Panel',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'panel_style',
                1 => 'panel_size'
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
                0 => 'image_card',
                1 => 'image_border',
                2 => 'image_box_shadow',
                3 => 'image_hover_box_shadow',
                4 => 'image_box_decoration',
                5 => 'image_box_decoration_inverse',
                6 => 'icon_ratio',
                7 => 'icon_color',
                8 => 'image_align',
                9 => 'image_grid_width',
                10 => 'image_gutter',
                11 => 'image_breakpoint',
                12 => 'image_vertical_align',
                13 => 'image_inline_svg',
                14 => 'image_animate_svg'
              ]
            ],
            5 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_style',
                1 => 'link_size'
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
