<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/list/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'list',
  'title' => 'List',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_image' => true,
    'show_link' => true,
    'image_align' => 'left',
    'image_vertical_align' => true
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'list_item',
        'props' => []
      ],
      1 => [
        'type' => 'list_item',
        'props' => []
      ],
      2 => [
        'type' => 'list_item',
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
      'title' => 'content',
      'item' => 'list_item',
      'media' => [
        'type' => 'image',
        'item' => [
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
    'list_style' => [
      'label' => 'Style',
      'description' => 'Select the list style and add larger padding between items.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Divider' => 'divider',
        'Striped' => 'striped',
        'Bullet' => 'bullet'
      ]
    ],
    'list_size' => [
      'type' => 'checkbox',
      'text' => 'Larger padding'
    ],
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Bold' => 'bold',
        'Muted' => 'muted',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
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
    'icon' => [
      'type' => 'icon',
      'label' => 'Icon',
      'description' => 'Click on the pencil to pick an icon from the SVG gallery.',
      'enable' => 'show_image'
    ],
    'icon_color' => [
      'label' => 'Icon Color',
      'description' => 'Set the icon color.',
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
      'enable' => 'show_image'
    ],
    'icon_ratio' => [
      'label' => 'Icon Size',
      'description' => 'Enter a size ratio, if you want the icon to appear larger than the default font size, for example 1.5 or 2 to double the size.',
      'attrs' => [
        'placeholder' => '1'
      ],
      'enable' => 'show_image'
    ],
    'image_align' => [
      'label' => 'Alignment',
      'description' => 'Align the image to the left or right.',
      'type' => 'select',
      'options' => [
        'Left' => 'left',
        'Right' => 'right'
      ],
      'enable' => 'show_image'
    ],
    'image_vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically center the image.',
      'type' => 'checkbox',
      'text' => 'Center'
    ],
    'link_style' => [
      'label' => 'Style',
      'description' => 'This option doesn\'t apply unless a URL has been added to the item.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Text' => 'text',
        'Reset' => 'reset'
      ],
      'enable' => 'show_link'
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
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
              'label' => 'List',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'list_style',
                1 => 'list_size'
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
                4 => 'image_vertical_align'
              ]
            ],
            3 => [
              'label' => 'Icon',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'icon',
                1 => 'icon_color',
                2 => 'icon_ratio'
              ]
            ],
            4 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_style'
              ]
            ],
            5 => [
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
