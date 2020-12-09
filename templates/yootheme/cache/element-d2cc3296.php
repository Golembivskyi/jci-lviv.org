<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/slider/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'slider',
  'title' => 'Slider',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'container' => true,
  'width' => 500,
  'defaults' => [
    'show_title' => true,
    'show_meta' => true,
    'show_content' => true,
    'show_link' => true,
    'slider_width' => 'fixed',
    'slider_width_default' => '1-1',
    'slider_width_medium' => '1-3',
    'slider_min_height' => 300,
    'slider_gutter' => 'default',
    'slider_autoplay_pause' => true,
    'nav' => 'dotnav',
    'nav_align' => 'center',
    'nav_breakpoint' => 's',
    'slidenav' => 'default',
    'slidenav_margin' => 'medium',
    'slidenav_breakpoint' => 's',
    'slidenav_outside_breakpoint' => 'xl',
    'overlay_mode' => 'cover',
    'overlay_position' => 'center',
    'overlay_transition' => 'fade',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'text_align' => 'center',
    'margin' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'slider_item',
        'props' => []
      ],
      1 => [
        'type' => 'slider_item',
        'props' => []
      ],
      2 => [
        'type' => 'slider_item',
        'props' => []
      ],
      3 => [
        'type' => 'slider_item',
        'props' => []
      ],
      4 => [
        'type' => 'slider_item',
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
      'item' => 'slider_item',
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
    'show_content' => [
      'type' => 'checkbox',
      'text' => 'Show the content'
    ],
    'show_link' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'slider_width' => [
      'label' => 'Item Width Mode',
      'description' => 'Define whether the width of the slider items is fixed or automatically expanded by its content widths.',
      'type' => 'select',
      'options' => [
        'Fixed' => 'fixed',
        'Auto' => ''
      ]
    ],
    'slider_height' => [
      'label' => 'Height',
      'description' => 'The height will adapt automatically based on its content. Alternatively, the height can adapt to the height of the viewport. <br><br>Note: Make sure, no height is set in the section settings when using one of the viewport options.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Auto' => '',
        'Viewport' => 'full',
        'Viewport (Minus 20%)' => 'percent',
        'Viewport (Minus the following section)' => 'section'
      ],
      'enable' => 'slider_width'
    ],
    'slider_min_height' => [
      'label' => 'Min Height',
      'description' => 'Set the minimum height. This is useful if the content is too large on small devices.',
      'type' => 'range',
      'attrs' => [
        'min' => 200,
        'max' => 800,
        'step' => 50
      ],
      'enable' => 'slider_width && slider_height'
    ],
    'slider_gutter' => [
      'label' => 'Gutter',
      'description' => 'Set the grid gutter width and display dividers between grid cells.',
      'type' => 'select',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => 'default',
        'Large' => 'large',
        'Collapse' => ''
      ]
    ],
    'slider_divider' => [
      'type' => 'checkbox',
      'text' => 'Show dividers',
      'enable' => 'slider_gutter'
    ],
    'slider_width_default' => [
      'label' => 'Phone Portrait',
      'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
      'type' => 'select',
      'options' => [
        '100%' => '1-1',
        '83%' => '5-6',
        '80%' => '4-5',
        '60%' => '3-5',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        '16%' => '1-6'
      ],
      'enable' => 'slider_width'
    ],
    'slider_width_small' => [
      'label' => 'Phone Landscape',
      'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '100%' => '1-1',
        '83%' => '5-6',
        '80%' => '4-5',
        '60%' => '3-5',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        '16%' => '1-6'
      ],
      'enable' => 'slider_width'
    ],
    'slider_width_medium' => [
      'label' => 'Tablet Landscape',
      'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
      'type' => 'select',
      'options' => [
        'Inherit' => '',
        '100%' => '1-1',
        '83%' => '5-6',
        '80%' => '4-5',
        '60%' => '3-5',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        '16%' => '1-6'
      ],
      'enable' => 'slider_width'
    ],
    'slider_width_large' => [
      'label' => 'Desktop',
      'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '100%' => '1-1',
        '83%' => '5-6',
        '80%' => '4-5',
        '60%' => '3-5',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        '16%' => '1-6'
      ],
      'enable' => 'slider_width'
    ],
    'slider_width_xlarge' => [
      'label' => 'Large Screens',
      'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Inherit' => '',
        '100%' => '1-1',
        '83%' => '5-6',
        '80%' => '4-5',
        '60%' => '3-5',
        '50%' => '1-2',
        '33%' => '1-3',
        '25%' => '1-4',
        '20%' => '1-5',
        '16%' => '1-6'
      ],
      'enable' => 'slider_width'
    ],
    'slider_sets' => [
      'label' => 'Sets',
      'description' => 'Group items into sets. The number of items within a set depends on the defined item width, e.g. <i>33%</i> means that each set contains 3 items.',
      'type' => 'checkbox',
      'text' => 'Slide all visible items at once'
    ],
    'slider_center' => [
      'label' => 'Center',
      'type' => 'checkbox',
      'text' => 'Center the active slide'
    ],
    'slider_finite' => [
      'label' => 'Finite',
      'type' => 'checkbox',
      'text' => 'Disable infinite scrolling'
    ],
    'slider_velocity' => [
      'label' => 'Velocity',
      'description' => 'Set the velocity in pixels per millisecond.',
      'type' => 'range',
      'attrs' => [
        'min' => 0.2,
        'max' => 3,
        'step' => 0.1,
        'placeholder' => '1'
      ]
    ],
    'slider_autoplay' => [
      'label' => 'Autoplay',
      'type' => 'checkbox',
      'text' => 'Enable autoplay'
    ],
    'slider_autoplay_pause' => [
      'type' => 'checkbox',
      'text' => 'Pause autoplay on hover',
      'enable' => 'slider_autoplay'
    ],
    'slider_autoplay_interval' => [
      'label' => 'Interval',
      'description' => 'Set the autoplay interval in seconds.',
      'type' => 'range',
      'attrs' => [
        'min' => 5,
        'max' => 15,
        'step' => 1,
        'placeholder' => '7'
      ],
      'enable' => 'slider_autoplay'
    ],
    'nav' => [
      'label' => 'Navigation',
      'description' => 'Select the navigation type.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Dotnav' => 'dotnav'
      ]
    ],
    'nav_align' => [
      'label' => 'Position',
      'description' => 'Align the navigation\'s items.',
      'type' => 'select',
      'options' => [
        'Left' => 'left',
        'Center' => 'center',
        'Right' => 'right'
      ],
      'enable' => 'nav'
    ],
    'nav_margin' => [
      'label' => 'Margin',
      'description' => 'Set the vertical margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium'
      ],
      'enable' => 'nav'
    ],
    'nav_breakpoint' => [
      'label' => 'Breakpoint',
      'description' => 'Display the navigation only on this device width and larger.',
      'type' => 'select',
      'options' => [
        'Always' => '',
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l',
        'X-Large (Large Screens)' => 'xl'
      ],
      'enable' => 'nav'
    ],
    'nav_color' => [
      'label' => 'Color',
      'description' => 'Set light or dark color mode.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => 'nav'
    ],
    'slidenav' => [
      'label' => 'Position',
      'description' => 'Select the position of the slidenav.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Outside' => 'outside',
        'Top Left' => 'top-left',
        'Top Right' => 'top-right',
        'Center Left' => 'center-left',
        'Center Right' => 'center-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right'
      ]
    ],
    'slidenav_hover' => [
      'type' => 'checkbox',
      'text' => 'Show on hover only',
      'enable' => 'slidenav'
    ],
    'slidenav_large' => [
      'type' => 'checkbox',
      'text' => 'Larger style',
      'enable' => 'slidenav'
    ],
    'slidenav_margin' => [
      'label' => 'Margin',
      'description' => 'Apply a margin between the slidenav and the slider container.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'slidenav'
    ],
    'slidenav_breakpoint' => [
      'label' => 'Breakpoint',
      'description' => 'Display the slidenav only on this device width and larger.',
      'type' => 'select',
      'options' => [
        'Always' => '',
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l',
        'X-Large (Large Screens)' => 'xl'
      ],
      'enable' => 'slidenav'
    ],
    'slidenav_color' => [
      'label' => 'Color',
      'description' => 'Set light or dark color mode.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => 'slidenav'
    ],
    'slidenav_outside_breakpoint' => [
      'label' => 'Outside Breakpoint',
      'description' => 'Display the slidenav only outside on this device width and larger. Otherwise it will be displayed inside.',
      'type' => 'select',
      'options' => [
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l',
        'X-Large (Large Screens)' => 'xl'
      ],
      'enable' => 'slidenav == \'outside\''
    ],
    'slidenav_outside_color' => [
      'label' => 'Outside Color',
      'description' => 'Set light or dark color if the slidenav is outside of the slideshow.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => 'slidenav == \'outside\''
    ],
    'overlay_mode' => [
      'label' => 'Mode',
      'description' => 'When using cover mode, you need to set the text color manually.',
      'type' => 'select',
      'options' => [
        'Cover' => 'cover',
        'Caption' => 'caption'
      ]
    ],
    'overlay_hover' => [
      'type' => 'checkbox',
      'text' => 'Display overlay on hover'
    ],
    'overlay_transition_background' => [
      'type' => 'checkbox',
      'text' => 'Animate background only',
      'enable' => 'overlay_hover && overlay_mode == \'cover\''
    ],
    'overlay_style' => [
      'label' => 'Style',
      'description' => 'Select the style for the overlay.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Overlay Default' => 'overlay-default',
        'Overlay Primary' => 'overlay-primary',
        'Tile Default' => 'tile-default',
        'Tile Muted' => 'tile-muted',
        'Tile Primary' => 'tile-primary',
        'Tile Secondary' => 'tile-secondary'
      ]
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
      'enable' => '!overlay_style || overlay_style && overlay_mode == \'cover\''
    ],
    'text_color_hover' => [
      'type' => 'checkbox',
      'text' => 'Inverse the text color on hover',
      'enable' => 'overlay_style && overlay_mode == \'cover\' && overlay_transition_background'
    ],
    'overlay_padding' => [
      'label' => 'Padding',
      'description' => 'Set the padding between the overlay and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large',
        'None' => 'none'
      ]
    ],
    'overlay_position' => [
      'label' => 'Position',
      'description' => 'Select the overlay or content position.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right',
        'Top Left' => 'top-left',
        'Top Center' => 'top-center',
        'Top Right' => 'top-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right',
        'Center' => 'center',
        'Center Left' => 'center-left',
        'Center Right' => 'center-right'
      ]
    ],
    'overlay_margin' => [
      'label' => 'Margin',
      'description' => 'Apply a margin between the overlay and the image container.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'overlay_style'
    ],
    'overlay_maxwidth' => [
      'label' => 'Max Width',
      'description' => 'Set the maximum content width.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => '!$match(overlay_position, \'(^top$|^bottom$)\')'
    ],
    'overlay_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the overlay.',
      'type' => 'select',
      'options' => [
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
      ],
      'enable' => 'overlay_hover'
    ],
    'image_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_transition' => [
      'label' => 'Transition',
      'description' => 'Select an image transition.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down'
      ]
    ],
    'title_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the title.',
      'type' => 'select',
      'default' => '',
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
      ],
      'enable' => 'show_title && overlay_hover'
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
    'meta_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the meta text.',
      'type' => 'select',
      'default' => '',
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
      ],
      'enable' => 'show_meta && overlay_hover'
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
    'content_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the content.',
      'type' => 'select',
      'default' => '',
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
      ],
      'enable' => 'show_content && overlay_hover'
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-slidenav</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>',
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
            4 => 'show_link'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Slider',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slider_width',
                1 => 'slider_height',
                2 => 'slider_min_height',
                3 => 'slider_gutter',
                4 => 'slider_divider'
              ]
            ],
            1 => [
              'label' => 'Item Width',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slider_width_default',
                1 => 'slider_width_small',
                2 => 'slider_width_medium',
                3 => 'slider_width_large',
                4 => 'slider_width_xlarge'
              ]
            ],
            2 => [
              'label' => 'Animation',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slider_sets',
                1 => 'slider_center',
                2 => 'slider_finite',
                3 => 'slider_velocity',
                4 => 'slider_autoplay',
                5 => 'slider_autoplay_pause',
                6 => 'slider_autoplay_interval'
              ]
            ],
            3 => [
              'label' => 'Navigation',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'nav',
                1 => 'nav_align',
                2 => 'nav_margin',
                3 => 'nav_breakpoint',
                4 => 'nav_color'
              ]
            ],
            4 => [
              'label' => 'Slidenav',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slidenav',
                1 => 'slidenav_hover',
                2 => 'slidenav_large',
                3 => 'slidenav_margin',
                4 => 'slidenav_breakpoint',
                5 => 'slidenav_color',
                6 => 'slidenav_outside_breakpoint',
                7 => 'slidenav_outside_color'
              ]
            ],
            5 => [
              'label' => 'Overlay',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'overlay_mode',
                1 => 'overlay_hover',
                2 => 'overlay_transition_background',
                3 => 'overlay_style',
                4 => 'text_color',
                5 => 'text_color_hover',
                6 => 'overlay_padding',
                7 => 'overlay_position',
                8 => 'overlay_margin',
                9 => 'overlay_maxwidth',
                10 => 'overlay_transition'
              ]
            ],
            6 => [
              'label' => 'Image/Video',
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
                1 => 'image_transition'
              ]
            ],
            7 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_transition',
                1 => 'title_style',
                2 => 'title_decoration',
                3 => 'title_color',
                4 => 'title_element'
              ]
            ],
            8 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_transition',
                1 => 'meta_style',
                2 => 'meta_color',
                3 => 'meta_align',
                4 => 'meta_margin'
              ]
            ],
            9 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_transition',
                1 => 'content_style'
              ]
            ],
            10 => [
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
