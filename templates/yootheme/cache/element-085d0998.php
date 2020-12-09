<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/slideshow/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'slideshow',
  'title' => 'Slideshow',
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
    'show_thumbnail' => true,
    'slideshow_min_height' => 300,
    'slideshow_autoplay_pause' => true,
    'nav' => 'dotnav',
    'nav_position' => 'bottom-center',
    'nav_position_margin' => 'medium',
    'nav_align' => 'center',
    'nav_breakpoint' => 's',
    'thumbnav_width' => '100',
    'thumbnav_height' => '75',
    'slidenav' => 'default',
    'slidenav_margin' => 'medium',
    'slidenav_breakpoint' => 's',
    'slidenav_outside_breakpoint' => 'xl',
    'overlay_position' => 'center-left',
    'overlay_animation' => 'parallax',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'link_text' => 'Read more',
    'link_style' => 'default',
    'margin' => 'default'
  ],
  'placeholder' => [
    'children' => [
      0 => [
        'type' => 'slideshow_item',
        'props' => []
      ],
      1 => [
        'type' => 'slideshow_item',
        'props' => []
      ],
      2 => [
        'type' => 'slideshow_item',
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
      'item' => 'slideshow_item',
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
      'type' => 'checkbox',
      'text' => 'Show the link'
    ],
    'show_thumbnail' => [
      'description' => 'Show or hide content fields without the need to delete the content itself.',
      'type' => 'checkbox',
      'text' => 'Show the navigation thumbnail instead of the image'
    ],
    'slideshow_height' => [
      'label' => 'Height',
      'description' => 'The slideshow always takes up full width, and the height will adapt automatically based on the defined ratio. Alternatively, the height can adapt to the height of the viewport. <br><br>Note: Make sure, no height is set in the section settings when using one of the viewport options.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Auto' => '',
        'Viewport' => 'full',
        'Viewport (Minus 20%)' => 'percent',
        'Viewport (Minus the following section)' => 'section'
      ]
    ],
    'slideshow_ratio' => [
      'label' => 'Ratio',
      'description' => 'Set a ratio. It\'s recommended to use the same ratio of the background image. Just use its width and height, like <code>1600:900</code>.',
      'attrs' => [
        'placeholder' => '16:9'
      ],
      'enable' => '!slideshow_height'
    ],
    'slideshow_min_height' => [
      'label' => 'Min Height',
      'description' => 'Set the minimum height. This is useful if the content is too large on small devices.',
      'type' => 'range',
      'attrs' => [
        'min' => 200,
        'max' => 800,
        'step' => 50
      ]
    ],
    'slideshow_max_height' => [
      'label' => 'Max Height',
      'description' => 'Set the maximum height.',
      'type' => 'range',
      'attrs' => [
        'min' => 500,
        'max' => 1600,
        'step' => 50
      ],
      'enable' => '!slideshow_height'
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
      ]
    ],
    'slideshow_box_shadow' => [
      'label' => 'Box Shadow',
      'description' => 'Select the slideshow\'s box shadow size.',
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
    'slideshow_box_decoration' => [
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
    'slideshow_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => '$match(slideshow_box_decoration, \'^(default|primary|secondary)$\')'
    ],
    'slideshow_animation' => [
      'label' => 'Transition',
      'description' => 'Select the transition between two slides.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Slide' => '',
        'Pull' => 'pull',
        'Push' => 'push',
        'Fade' => 'fade',
        'Scale' => 'scale'
      ]
    ],
    'slideshow_velocity' => [
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
    'slideshow_autoplay' => [
      'label' => 'Autoplay',
      'type' => 'checkbox',
      'text' => 'Enable autoplay'
    ],
    'slideshow_autoplay_pause' => [
      'type' => 'checkbox',
      'text' => 'Pause autoplay on hover',
      'enable' => 'slideshow_autoplay'
    ],
    'slideshow_autoplay_interval' => [
      'label' => 'Interval',
      'description' => 'Set the autoplay interval in seconds.',
      'type' => 'range',
      'attrs' => [
        'min' => 5,
        'max' => 15,
        'step' => 1,
        'placeholder' => '7'
      ],
      'enable' => 'slideshow_autoplay'
    ],
    'slideshow_kenburns' => [
      'label' => 'Ken Burns Effect',
      'description' => 'Select the transformation origin for the Ken Burns animation.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Alternate' => 'alternate',
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
    'slideshow_kenburns_duration' => [
      'label' => 'Duration',
      'description' => 'Set the duration for the Ken Burns effect in seconds.',
      'type' => 'range',
      'attrs' => [
        'min' => 10,
        'max' => 30,
        'step' => 1,
        'placeholder' => '15'
      ],
      'enable' => 'slideshow_kenburns'
    ],
    'nav' => [
      'label' => 'Navigation',
      'description' => 'Select the navigation type.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Dotnav' => 'dotnav',
        'Thumbnav' => 'thumbnav'
      ]
    ],
    'nav_below' => [
      'type' => 'checkbox',
      'text' => 'Show below slideshow',
      'enable' => 'nav'
    ],
    'nav_vertical' => [
      'type' => 'checkbox',
      'text' => 'Vertical navigation',
      'enable' => 'nav && !nav_below'
    ],
    'nav_position' => [
      'label' => 'Position',
      'description' => 'Select the position of the navigation.',
      'type' => 'select',
      'options' => [
        'Top Left' => 'top-left',
        'Top Right' => 'top-right',
        'Center Left' => 'center-left',
        'Center Right' => 'center-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right'
      ],
      'show' => 'nav && !nav_below'
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
      'show' => 'nav && nav_below'
    ],
    'nav_position_margin' => [
      'label' => 'Margin',
      'description' => 'Apply a margin between the navigation and the slideshow container.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'show' => 'nav && !nav_below'
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
      'show' => 'nav && nav_below'
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
      'description' => 'Set light or dark color if the navigation is below the slideshow.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => 'nav && nav_below'
    ],
    'thumbnav_width' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'nav == \'thumbnav\' && show_thumbnail'
    ],
    'thumbnav_height' => [
      'attrs' => [
        'placeholder' => 'auto'
      ],
      'enable' => 'nav == \'thumbnav\' && show_thumbnail'
    ],
    'thumbnav_nowrap' => [
      'label' => 'Thumbnav Wrap',
      'description' => 'Define whether thumbnails wrap into multiple lines or not if the container is too small.',
      'type' => 'checkbox',
      'text' => 'Don\'t wrap into multiple lines',
      'enable' => 'nav == \'thumbnav\' && show_thumbnail'
    ],
    'thumbnav_inline_svg' => [
      'label' => 'Inline SVG',
      'description' => 'Inject SVG images into the page markup, so that they can easily be styled with CSS.',
      'type' => 'checkbox',
      'text' => 'Make SVG stylable with CSS',
      'enable' => 'nav == \'thumbnav\' && show_thumbnail'
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
      'description' => 'Apply a margin between the slidenav and the slideshow container.',
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
    'overlay_container' => [
      'label' => 'Container Width',
      'description' => 'Set the maximum content width. Note: The section may already have a maximum width, which you cannot exceed.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Small' => 'small',
        'Large' => 'large',
        'Expand' => 'expand'
      ]
    ],
    'overlay_container_padding' => [
      'label' => 'Container Padding',
      'description' => 'Set the vertical container padding to position the overlay.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'X-Small' => 'xsmall',
        'Small' => 'small',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => 'overlay_container'
    ],
    'overlay_margin' => [
      'label' => 'Margin',
      'description' => 'Set the margin between the overlay and the slideshow container.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large',
        'None' => 'none'
      ],
      'enable' => '!overlay_container'
    ],
    'overlay_position' => [
      'label' => 'Position',
      'description' => 'Select the content position.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right',
        'Top Left' => 'top-left',
        'Top Center' => 'top-center',
        'Top Right' => 'top-right',
        'Center Left' => 'center-left',
        'Center Center' => 'center',
        'Center Right' => 'center-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right'
      ]
    ],
    'overlay_style' => [
      'label' => 'Style',
      'description' => 'Select a style for the overlay.',
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
    'overlay_padding' => [
      'label' => 'Padding',
      'description' => 'Set the padding between the overlay and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large'
      ],
      'enable' => 'overlay_style'
    ],
    'overlay_width' => [
      'label' => 'Width',
      'description' => 'Set a fixed width.',
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
    'overlay_animation' => [
      'label' => 'Animation',
      'description' => 'Choose between a parallax depending on the scroll position or an animation, which is applied once the slide is active.',
      'type' => 'select',
      'options' => [
        'Parallax' => 'parallax',
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
    '_slideshow_overlay_parallax' => [
      'type' => 'button-panel',
      'panel' => 'builder-slideshow-overlay-parallax',
      'text' => 'Edit Settings',
      'enable' => 'overlay_animation == \'parallax\''
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
    '_title_parallax' => [
      'label' => 'Parallax',
      'description' => 'Add a parallax effect.',
      'type' => 'button-panel',
      'panel' => 'builder-slideshow-title-parallax',
      'text' => 'Edit Settings',
      'enable' => 'overlay_animation == \'parallax\''
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
    '_meta_parallax' => [
      'label' => 'Parallax',
      'description' => 'Add a parallax effect.',
      'type' => 'button-panel',
      'panel' => 'builder-slideshow-meta-parallax',
      'text' => 'Edit Settings',
      'enable' => 'overlay_animation == \'parallax\''
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
    '_content_parallax' => [
      'label' => 'Parallax',
      'description' => 'Add a parallax effect.',
      'type' => 'button-panel',
      'panel' => 'builder-slideshow-content-parallax',
      'text' => 'Edit Settings',
      'enable' => 'overlay_animation == \'parallax\''
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
    '_link_parallax' => [
      'label' => 'Parallax',
      'description' => 'Add a parallax effect.',
      'type' => 'button-panel',
      'panel' => 'builder-slideshow-link-parallax',
      'text' => 'Edit Settings',
      'enable' => 'overlay_animation == \'parallax\''
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-slidenav</code>, <code>.el-image</code>, <code>.el-overlay</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-link</code>',
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
            4 => 'show_link',
            5 => 'show_thumbnail'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Slideshow',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slideshow_height',
                1 => 'slideshow_ratio',
                2 => 'slideshow_min_height',
                3 => 'slideshow_max_height',
                4 => 'text_color',
                5 => 'slideshow_box_shadow',
                6 => 'slideshow_box_decoration',
                7 => 'slideshow_box_decoration_inverse'
              ]
            ],
            1 => [
              'label' => 'Animation',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slideshow_animation',
                1 => 'slideshow_velocity',
                2 => 'slideshow_autoplay',
                3 => 'slideshow_autoplay_pause',
                4 => 'slideshow_autoplay_interval',
                5 => 'slideshow_kenburns',
                6 => 'slideshow_kenburns_duration'
              ]
            ],
            2 => [
              'label' => 'Navigation',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'nav',
                1 => 'nav_below',
                2 => 'nav_vertical',
                3 => 'nav_position',
                4 => 'nav_align',
                5 => 'nav_position_margin',
                6 => 'nav_margin',
                7 => 'nav_breakpoint',
                8 => 'nav_color',
                9 => [
                  'label' => 'Thumbnail Width/Height',
                  'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                  'type' => 'grid',
                  'width' => '1-2',
                  'fields' => [
                    0 => 'thumbnav_width',
                    1 => 'thumbnav_height'
                  ]
                ],
                10 => 'thumbnav_nowrap',
                11 => 'thumbnav_inline_svg'
              ]
            ],
            3 => [
              'label' => 'Slidenav',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'slidenav',
                1 => 'slidenav_hover',
                2 => 'slidenav_large',
                3 => 'slidenav_margin',
                4 => 'slidenav_breakpoint',
                5 => 'slidenav_outside_breakpoint',
                6 => 'slidenav_outside_color'
              ]
            ],
            4 => [
              'label' => 'Overlay',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'overlay_container',
                1 => 'overlay_container_padding',
                2 => 'overlay_margin',
                3 => 'overlay_position',
                4 => 'overlay_style',
                5 => 'overlay_padding',
                6 => 'overlay_width',
                7 => 'overlay_animation',
                8 => '_slideshow_overlay_parallax'
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
                ]
              ]
            ],
            6 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_style',
                1 => 'title_decoration',
                2 => 'title_color',
                3 => 'title_element',
                4 => '_title_parallax'
              ]
            ],
            7 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_style',
                1 => 'meta_color',
                2 => 'meta_align',
                3 => 'meta_margin',
                4 => '_meta_parallax'
              ]
            ],
            8 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_style',
                1 => '_content_parallax'
              ]
            ],
            9 => [
              'label' => 'Link',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'link_text',
                1 => 'link_target',
                2 => 'link_style',
                3 => 'link_size',
                4 => '_link_parallax'
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
  ],
  'panels' => [
    'builder-slideshow-overlay-parallax' => [
      'title' => 'Overlay Parallax',
      'width' => 500,
      'fields' => [
        'overlay_parallax_x_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'overlay_parallax_x_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'overlay_parallax_y_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'overlay_parallax_y_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'overlay_parallax_scale_start' => [
          'label' => 'Scale Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'overlay_parallax_scale_end' => [
          'label' => 'Scale End',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'overlay_parallax_rotate_start' => [
          'label' => 'Rotate Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'overlay_parallax_rotate_end' => [
          'label' => 'Rotate End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'overlay_parallax_opacity_start' => [
          'label' => 'Opacity Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ],
        'overlay_parallax_opacity_end' => [
          'label' => 'Opacity End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'name' => '_overlay_parallax_x',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'overlay_parallax_x_start',
                1 => 'overlay_parallax_x_end'
              ]
            ],
            1 => [
              'name' => '_overlay_parallax_y',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'overlay_parallax_y_start',
                1 => 'overlay_parallax_y_end'
              ]
            ],
            2 => [
              'name' => '_overlay_parallax_scale',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'overlay_parallax_scale_start',
                1 => 'overlay_parallax_scale_end'
              ]
            ],
            3 => [
              'name' => '_overlay_parallax_rotate',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'overlay_parallax_rotate_start',
                1 => 'overlay_parallax_rotate_end'
              ]
            ],
            4 => [
              'name' => '_overlay_parallax_opacity',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'overlay_parallax_opacity_start',
                1 => 'overlay_parallax_opacity_end'
              ]
            ]
          ]
        ]
      ]
    ],
    'builder-slideshow-title-parallax' => [
      'title' => 'Title Parallax',
      'width' => 500,
      'fields' => [
        'title_parallax_x_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'title_parallax_x_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'title_parallax_y_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'title_parallax_y_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'title_parallax_scale_start' => [
          'label' => 'Scale Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'title_parallax_scale_end' => [
          'label' => 'Scale End',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'title_parallax_rotate_start' => [
          'label' => 'Rotate Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'title_parallax_rotate_end' => [
          'label' => 'Rotate End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'title_parallax_opacity_start' => [
          'label' => 'Opacity Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ],
        'title_parallax_opacity_end' => [
          'label' => 'Opacity End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'name' => '_title_parallax_x',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'title_parallax_x_start',
                1 => 'title_parallax_x_end'
              ]
            ],
            1 => [
              'name' => '_title_parallax_y',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'title_parallax_y_start',
                1 => 'title_parallax_y_end'
              ]
            ],
            2 => [
              'name' => '_title_parallax_scale',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'title_parallax_scale_start',
                1 => 'title_parallax_scale_end'
              ]
            ],
            3 => [
              'name' => '_title_parallax_rotate',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'title_parallax_rotate_start',
                1 => 'title_parallax_rotate_end'
              ]
            ],
            4 => [
              'name' => '_title_parallax_opacity',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'title_parallax_opacity_start',
                1 => 'title_parallax_opacity_end'
              ]
            ]
          ]
        ]
      ]
    ],
    'builder-slideshow-meta-parallax' => [
      'title' => 'Meta Parallax',
      'width' => 500,
      'fields' => [
        'meta_parallax_x_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'meta_parallax_x_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'meta_parallax_y_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'meta_parallax_y_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'meta_parallax_scale_start' => [
          'label' => 'Scale Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'meta_parallax_scale_end' => [
          'label' => 'Scale End',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'meta_parallax_rotate_start' => [
          'label' => 'Rotate Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'meta_parallax_rotate_end' => [
          'label' => 'Rotate End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'meta_parallax_opacity_start' => [
          'label' => 'Opacity Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ],
        'meta_parallax_opacity_end' => [
          'label' => 'Opacity End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'name' => '_meta_parallax_x',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'meta_parallax_x_start',
                1 => 'meta_parallax_x_end'
              ]
            ],
            1 => [
              'name' => '_meta_parallax_y',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'meta_parallax_y_start',
                1 => 'meta_parallax_y_end'
              ]
            ],
            2 => [
              'name' => '_meta_parallax_scale',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'meta_parallax_scale_start',
                1 => 'meta_parallax_scale_end'
              ]
            ],
            3 => [
              'name' => '_meta_parallax_rotate',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'meta_parallax_rotate_start',
                1 => 'meta_parallax_rotate_end'
              ]
            ],
            4 => [
              'name' => '_meta_parallax_opacity',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'meta_parallax_opacity_start',
                1 => 'meta_parallax_opacity_end'
              ]
            ]
          ]
        ]
      ]
    ],
    'builder-slideshow-content-parallax' => [
      'title' => 'Content Parallax',
      'width' => 500,
      'fields' => [
        'content_parallax_x_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'content_parallax_x_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'content_parallax_y_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'content_parallax_y_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'content_parallax_scale_start' => [
          'label' => 'Scale Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'content_parallax_scale_end' => [
          'label' => 'Scale End',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'content_parallax_rotate_start' => [
          'label' => 'Rotate Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'content_parallax_rotate_end' => [
          'label' => 'Rotate End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'content_parallax_opacity_start' => [
          'label' => 'Opacity Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ],
        'content_parallax_opacity_end' => [
          'label' => 'Opacity End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'name' => '_content_parallax_x',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'content_parallax_x_start',
                1 => 'content_parallax_x_end'
              ]
            ],
            1 => [
              'name' => '_content_parallax_y',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'content_parallax_y_start',
                1 => 'content_parallax_y_end'
              ]
            ],
            2 => [
              'name' => '_content_parallax_scale',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'content_parallax_scale_start',
                1 => 'content_parallax_scale_end'
              ]
            ],
            3 => [
              'name' => '_content_parallax_rotate',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'content_parallax_rotate_start',
                1 => 'content_parallax_rotate_end'
              ]
            ],
            4 => [
              'name' => '_content_parallax_opacity',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'content_parallax_opacity_start',
                1 => 'content_parallax_opacity_end'
              ]
            ]
          ]
        ]
      ]
    ],
    'builder-slideshow-link-parallax' => [
      'title' => 'Link Parallax',
      'width' => 500,
      'fields' => [
        'link_parallax_x_start' => [
          'label' => 'Horizontal Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'link_parallax_x_end' => [
          'label' => 'Horizontal End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'link_parallax_y_start' => [
          'label' => 'Vertical Start',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'link_parallax_y_end' => [
          'label' => 'Vertical End',
          'type' => 'range',
          'attrs' => [
            'min' => -600,
            'max' => 600,
            'step' => 10
          ]
        ],
        'link_parallax_scale_start' => [
          'label' => 'Scale Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'link_parallax_scale_end' => [
          'label' => 'Scale End',
          'type' => 'range',
          'attrs' => [
            'min' => 0.3,
            'max' => 4,
            'step' => 0.1
          ]
        ],
        'link_parallax_rotate_start' => [
          'label' => 'Rotate Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'link_parallax_rotate_end' => [
          'label' => 'Rotate End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 360,
            'step' => 10
          ]
        ],
        'link_parallax_opacity_start' => [
          'label' => 'Opacity Start',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ],
        'link_parallax_opacity_end' => [
          'label' => 'Opacity End',
          'type' => 'range',
          'attrs' => [
            'min' => 0,
            'max' => 1,
            'step' => 0.1
          ]
        ]
      ],
      'fieldset' => [
        'default' => [
          'fields' => [
            0 => [
              'name' => '_link_parallax_x',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'link_parallax_x_start',
                1 => 'link_parallax_x_end'
              ]
            ],
            1 => [
              'name' => '_link_parallax_y',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'link_parallax_y_start',
                1 => 'link_parallax_y_end'
              ]
            ],
            2 => [
              'name' => '_link_parallax_scale',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'link_parallax_scale_start',
                1 => 'link_parallax_scale_end'
              ]
            ],
            3 => [
              'name' => '_link_parallax_rotate',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'link_parallax_rotate_start',
                1 => 'link_parallax_rotate_end'
              ]
            ],
            4 => [
              'name' => '_link_parallax_opacity',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'link_parallax_opacity_start',
                1 => 'link_parallax_opacity_end'
              ]
            ]
          ]
        ]
      ]
    ]
  ]
];
