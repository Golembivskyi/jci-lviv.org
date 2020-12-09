<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/map/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'map',
  'title' => 'Map',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_title' => true,
    'type' => 'roadmap',
    'zoom' => 10,
    'controls' => true,
    'zooming' => false,
    'dragging' => false
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Markers',
      'type' => 'content-items',
      'title' => 'title',
      'button' => 'Add Marker',
      'item' => 'map_marker'
    ],
    'show_title' => [
      'type' => 'checkbox',
      'text' => 'Show title'
    ],
    'type' => [
      'label' => 'Type',
      'description' => 'Choose a map type.',
      'type' => 'select',
      'options' => [
        'Roadmap' => 'roadmap',
        'Satellite' => 'satellite'
      ]
    ],
    'zoom' => [
      'label' => 'Zoom',
      'description' => 'Set the initial resolution at which to display the map. 0 is fully zoomed out and 18 is at the highest resolution zoomed in.',
      'type' => 'number',
      'attrs' => [
        'min' => 0,
        'max' => 18
      ]
    ],
    'controls' => [
      'label' => 'Controls',
      'description' => 'Display the map controls and define whether the map can be zoomed or be dragged using the mouse wheel or touch.',
      'type' => 'checkbox',
      'text' => 'Show map controls'
    ],
    'zooming' => [
      'type' => 'checkbox',
      'text' => 'Enable map zooming'
    ],
    'dragging' => [
      'type' => 'checkbox',
      'text' => 'Enable map dragging'
    ],
    'height' => [
      'label' => 'Height',
      'description' => 'Set the height in pixels, e.g. 300.',
      'type' => 'text'
    ],
    'width' => [
      'label' => 'Width',
      'description' => 'Set the width in pixels, e.g. 600. If no width is set, the map will take the full width and keep the height. Or use the width only to define the breakpoint from which the map starts to shrink preserving the aspect ratio.',
      'type' => 'text'
    ],
    'width_breakpoint' => [
      'type' => 'checkbox',
      'text' => 'Use as breakpoint only',
      'enable' => 'width'
    ],
    'popup_max_width' => [
      'label' => 'Popup max width',
      'description' => 'Set a maximum width for the popup, e.g. 300.',
      'type' => 'text'
    ],
    'styler_hue' => [
      'label' => 'Hue',
      'description' => 'Set the hue (e.g. #ff0000).',
      'type' => 'color',
      'alpha' => false,
      'enable' => 'this.Config.values.google_maps'
    ],
    'styler_lightness' => [
      'label' => 'Lightness',
      'description' => 'Set percentage change in lightness (Between -100 and 100).',
      'type' => 'range',
      'attrs' => [
        'min' => -100,
        'max' => 100,
        'step' => 1
      ],
      'enable' => 'this.Config.values.google_maps'
    ],
    'styler_invert_lightness' => [
      'type' => 'checkbox',
      'text' => 'Invert lightness',
      'enable' => 'this.Config.values.google_maps'
    ],
    'styler_saturation' => [
      'label' => 'Saturation',
      'description' => 'Set percentage change in saturation (Between -100 and 100).',
      'type' => 'range',
      'attrs' => [
        'min' => -100,
        'max' => 100,
        'step' => 1
      ],
      'enable' => 'this.Config.values.google_maps'
    ],
    'styler_gamma' => [
      'label' => 'Gamma',
      'description' => 'Set percentage change in the amount of gamma correction (Between 0.01 and 10.0, where 1.0 applies no correction).',
      'type' => 'range',
      'attrs' => [
        'min' => 0.5,
        'max' => 2,
        'step' => 0.1
      ],
      'enable' => 'this.Config.values.google_maps'
    ],
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
            0 => 'content',
            1 => 'show_title'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Map',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'type',
                1 => 'zoom',
                2 => 'controls',
                3 => 'zooming',
                4 => 'dragging',
                5 => 'height',
                6 => 'width',
                7 => 'width_breakpoint',
                8 => 'popup_max_width'
              ]
            ],
            1 => [
              'label' => 'Style',
              'description' => 'Only available for Google Maps.',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'styler_hue',
                1 => 'styler_lightness',
                2 => 'styler_invert_lightness',
                3 => 'styler_saturation',
                4 => 'styler_gamma'
              ]
            ],
            2 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'maxwidth',
                1 => 'maxwidth_align',
                2 => 'maxwidth_breakpoint',
                3 => 'margin',
                4 => 'margin_remove_top',
                5 => 'margin_remove_bottom',
                6 => 'animation',
                7 => '_parallax_button',
                8 => 'visibility',
                9 => 'container_padding_remove'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
