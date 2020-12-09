<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/image/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'image',
  'title' => 'Image',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'margin' => 'default'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
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
      'description' => 'Enter the image\'s alt attribute.',
      'enable' => 'image'
    ],
    'link' => [
      'label' => 'Link',
      'type' => 'link',
      'attrs' => [
        'placeholder' => 'http://'
      ]
    ],
    'link_target' => [
      'label' => 'Link Target',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Same Window' => '',
        'New Window' => 'blank',
        'Modal' => 'modal'
      ],
      'enable' => 'link'
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
      ]
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
      ]
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
      'enable' => 'link'
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
      ]
    ],
    'image_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')'
    ],
    'image_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS'
    ],
    'image_animate_svg' => [
      'type' => 'checkbox',
      'text' => 'Animate strokes',
      'enable' => 'image_inline_svg'
    ],
    'lightbox_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'link_target == \'modal\''
    ],
    'lightbox_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'link_target == \'modal\''
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
    'container_padding_remove' => $this->get('builder:container_padding_remove'),
    'name' => $this->get('builder:name'),
    'status' => $this->get('builder:status'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-image</code>, <code>.el-link</code>',
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
            0 => 'image',
            1 => [
              'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
              'name' => '_image_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'image_width',
                1 => 'image_height'
              ]
            ],
            2 => 'image_alt',
            3 => 'link',
            4 => 'link_target'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Image',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'image_border',
                1 => 'image_box_shadow',
                2 => 'image_hover_box_shadow',
                3 => 'image_box_decoration',
                4 => 'image_box_decoration_inverse',
                5 => 'image_inline_svg',
                6 => 'image_animate_svg'
              ]
            ],
            1 => [
              'label' => 'Lightbox',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => [
                  'label' => 'Width/Height',
                  'description' => 'Set the width and height for the lightbox content, i.e. image, video or iframe.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'lightbox_width',
                    1 => 'lightbox_height'
                  ]
                ]
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
