<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/column/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'column',
  'title' => 'Column',
  'container' => true,
  'width' => 500,
  'defaults' => [
    'widths' => [],
    'image_position' => 'center-center',
    'media_overlay_gradient' => ''
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'vertical_align' => [
      'label' => 'Vertical Alignment',
      'description' => 'Vertically align the elements in the column.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Top' => '',
        'Middle' => 'middle',
        'Bottom' => 'bottom'
      ]
    ],
    'style' => [
      'label' => 'Style',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Muted' => 'muted',
        'Primary' => 'primary',
        'Secondary' => 'secondary'
      ]
    ],
    'image' => [
      'label' => 'Image',
      'description' => 'Upload a background image.',
      'type' => 'image'
    ],
    '_media' => [
      'type' => 'button-panel',
      'panel' => 'builder-column-media',
      'text' => 'Edit Settings',
      'show' => 'image'
    ],
    'preserve_color' => [
      'label' => 'Text Color',
      'description' => 'Disable automatic text recoloring, for example when you use cards inside colored columns.',
      'type' => 'checkbox',
      'text' => 'Preserve color',
      'show' => 'style == \'primary\' || style == \'secondary\''
    ],
    'text_color' => [
      'label' => 'Text Color',
      'description' => 'Set light or dark color mode for text, buttons and controls.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'show' => 'style != \'primary\' && style != \'secondary\' && (!style || image)'
    ],
    'padding' => [
      'label' => 'Padding',
      'description' => 'Set the padding.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'X-Small' => 'xsmall',
        'Small' => 'small',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'none'
      ],
      'enable' => 'style || image'
    ],
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-column</code>',
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
      'fields' => [
        0 => 'vertical_align',
        1 => 'style',
        2 => 'image',
        3 => '_media',
        4 => 'preserve_color',
        5 => 'text_color',
        6 => 'padding',
        7 => 'css'
      ]
    ]
  ],
  'panels' => [
    'builder-column-media' => [
      'title' => 'Image',
      'width' => 500,
      'fields' => [
        'image_width' => [
          'label' => 'Width',
          'attrs' => [
            'placeholder' => 'auto'
          ]
        ],
        'image_height' => [
          'label' => 'Height',
          'attrs' => [
            'placeholder' => 'auto'
          ]
        ],
        'image_size' => [
          'label' => 'Image Size',
          'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
          'type' => 'select',
          'default' => '',
          'options' => [
            'Auto' => '',
            'Cover' => 'cover',
            'Contain' => 'contain'
          ]
        ],
        'image_position' => [
          'label' => 'Image Position',
          'description' => 'Set the initial background position, relative to the section layer.',
          'type' => 'select',
          'options' => [
            'Top Left' => 'top-left',
            'Top Center' => 'top-center',
            'Top Right' => 'top-right',
            'Center Left' => 'center-left',
            'Center Center' => 'center-center',
            'Center Right' => 'center-right',
            'Bottom Left' => 'bottom-left',
            'Bottom Center' => 'bottom-center',
            'Bottom Right' => 'bottom-right'
          ]
        ],
        'image_effect' => [
          'label' => 'Image Effect',
          'description' => 'Add a parallax effect or fix the background with regard to the viewport while scrolling.',
          'type' => 'select',
          'default' => '',
          'options' => [
            'None' => '',
            'Parallax' => 'parallax',
            'Fixed' => 'fixed'
          ]
        ],
        'image_parallax_bgx_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'image_parallax_bgx_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'image_parallax_bgy_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'image_parallax_bgy_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'image_parallax_breakpoint' => [
          'label' => 'Parallax Breakpoint',
          'description' => 'Display the parallax effect only on this device width and larger.',
          'type' => 'select',
          'default' => '',
          'options' => [
            'Always' => '',
            'Small (Phone Landscape)' => 's',
            'Medium (Tablet Landscape)' => 'm',
            'Large (Desktop)' => 'l',
            'X-Large (Large Screens)' => 'xl'
          ],
          'show' => 'image_effect == \'parallax\''
        ],
        'image_visibility' => [
          'label' => 'Image Visibility',
          'description' => 'Display the image only on this device width and larger.',
          'type' => 'select',
          'default' => '',
          'options' => [
            'Always' => '',
            'Small (Phone Landscape)' => 's',
            'Medium (Tablet Landscape)' => 'm',
            'Large (Desktop)' => 'l',
            'X-Large (Large Screens)' => 'xl'
          ]
        ],
        'media_background' => [
          'label' => 'Background Color',
          'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.',
          'type' => 'color'
        ],
        'media_blend_mode' => [
          'label' => 'Blend Mode',
          'description' => 'Determine how the image or video will blend with the background color.',
          'type' => 'select',
          'default' => '',
          'options' => [
            'Normal' => '',
            'Multiply' => 'multiply',
            'Screen' => 'screen',
            'Overlay' => 'overlay',
            'Darken' => 'darken',
            'Lighten' => 'lighten',
            'Color-dodge' => 'color-dodge',
            'Color-burn' => 'color-burn',
            'Hard-light' => 'hard-light',
            'Soft-light' => 'soft-light',
            'Difference' => 'difference',
            'Exclusion' => 'exclusion',
            'Hue' => 'hue',
            'Saturation' => 'saturation',
            'Color' => 'color',
            'Luminosity' => 'luminosity'
          ]
        ],
        'media_overlay' => [
          'label' => 'Overlay Color',
          'description' => 'Set an additional transparent overlay to soften the image or video.',
          'type' => 'gradient',
          'internal' => 'media_overlay_gradient'
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'description' => 'Set the width and height in pixels (e.g. 600). Setting just one value preserves the original proportions. The image will be resized and cropped automatically.',
              'name' => '_image_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'image_width',
                1 => 'image_height'
              ]
            ],
            1 => 'image_size',
            2 => 'image_position',
            3 => 'image_effect',
            4 => [
              'name' => '_image_parallax_bgx',
              'type' => 'grid',
              'width' => '1-2',
              'show' => 'image_effect == \'parallax\'',
              'fields' => [
                0 => 'image_parallax_bgx_start',
                1 => 'image_parallax_bgx_end'
              ]
            ],
            5 => [
              'name' => '_image_parallax_bgy',
              'type' => 'grid',
              'width' => '1-2',
              'show' => 'image_effect == \'parallax\'',
              'fields' => [
                0 => 'image_parallax_bgy_start',
                1 => 'image_parallax_bgy_end'
              ]
            ],
            6 => 'image_parallax_breakpoint',
            7 => 'image_visibility',
            8 => 'media_background',
            9 => 'media_blend_mode',
            10 => 'media_overlay'
          ]
        ]
      ]
    ]
  ]
];
