<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/video/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'video',
  'title' => 'Video',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'video_controls' => true,
    'margin' => 'default'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'video' => [
      'label' => 'Video',
      'description' => 'Select a video file or enter a link from <a href="https://www.youtube.com" target="_blank">YouTube</a> or <a href="https://vimeo.com" target="_blank">Vimeo</a>.',
      'type' => 'video'
    ],
    'video_width' => [
      'label' => 'Width'
    ],
    'video_height' => [
      'label' => 'Height'
    ],
    'video_controls' => [
      'label' => 'Options',
      'type' => 'checkbox',
      'text' => 'Show controls',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_loop' => [
      'type' => 'checkbox',
      'text' => 'Loop video',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_muted' => [
      'type' => 'checkbox',
      'text' => 'Mute video',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_playsinline' => [
      'type' => 'checkbox',
      'text' => 'Play inline on mobile devices',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_lazyload' => [
      'type' => 'checkbox',
      'text' => 'Lazy load video',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_autoplay' => [
      'label' => 'Autoplay',
      'description' => 'Disable autoplay, start autoplay immediately or as soon as the video enters the viewport.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Off' => '',
        'On' => true,
        'On (If inview)' => 'inview'
      ],
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_poster' => [
      'label' => 'Poster Frame',
      'description' => 'Select an optional image which shows up until the video plays. If not selected, the first video frame is shown as the poster frame.',
      'type' => 'image',
      'enable' => 'video && !$match(video, \'(youtube\\.com|youtube-nocookie\\.com|vimeo\\.com)\', \'i\')'
    ],
    'video_box_shadow' => [
      'label' => 'Box Shadow',
      'description' => 'Select the video\'s box shadow size.',
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
    'video_box_decoration' => [
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
    'video_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => '$match(video_box_decoration, \'^(default|primary|secondary)$\')'
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
            0 => 'video',
            1 => [
              'description' => 'Set the video dimensions.',
              'name' => '_video_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'video_width',
                1 => 'video_height'
              ]
            ],
            2 => 'video_controls',
            3 => 'video_loop',
            4 => 'video_muted',
            5 => 'video_playsinline',
            6 => 'video_lazyload',
            7 => 'video_autoplay',
            8 => 'video_poster'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Video',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'video_box_shadow',
                1 => 'video_box_decoration',
                2 => 'video_box_decoration_inverse'
              ]
            ],
            1 => [
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
