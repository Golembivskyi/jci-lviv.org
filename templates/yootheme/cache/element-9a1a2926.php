<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/button_item/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'button_item',
  'title' => 'Button',
  'width' => 500,
  'defaults' => [
    'button_style' => 'default',
    'icon_align' => 'left'
  ],
  'placeholder' => [
    'props' => [
      'content' => 'Button'
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'content' => [
      'label' => 'Content'
    ],
    'link' => $this->get('builder:link'),
    'link_title' => $this->get('builder:link_title'),
    'link_target' => [
      'label' => 'Link Target',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Same Window' => '',
        'New Window' => 'blank',
        'Modal' => 'modal'
      ]
    ],
    'lightbox_width' => [
      'label' => 'Lightbox Width',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'link_target == \'modal\''
    ],
    'lightbox_height' => [
      'label' => 'Lightbox Height',
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'link_target == \'modal\''
    ],
    'icon' => [
      'label' => 'Icon',
      'description' => 'Pick an optional icon.',
      'type' => 'icon'
    ],
    'icon_align' => [
      'label' => 'Icon Alignment',
      'description' => 'Choose the icon position.',
      'type' => 'select',
      'options' => [
        'Left' => 'left',
        'Right' => 'right'
      ],
      'enable' => 'icon'
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
        'Text' => 'text',
        'Link' => '',
        'Link Muted' => 'link-muted',
        'Link Text' => 'link-text'
      ]
    ]
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'content',
        1 => 'link',
        2 => 'link_title',
        3 => 'link_target',
        4 => [
          'description' => 'Set the width and height for the lightbox content, i.e. image, video or iframe.',
          'name' => '_lightbox_media_dimension',
          'type' => 'grid',
          'width' => '1-2',
          'fields' => [
            0 => 'lightbox_width',
            1 => 'lightbox_height'
          ]
        ],
        5 => 'icon',
        6 => 'icon_align',
        7 => 'button_style'
      ]
    ]
  ]
];
