<?php // @file C:/xampp/htdocs/lviv-jci.org/templates/yootheme/vendor/yootheme/builder/elements/row/element.json

return [
  'name' => 'row',
  'title' => 'Row',
  'container' => true,
  'width' => 500,
  'defaults' => [
    'layout' => '1-1',
    'breakpoint' => 'm',
    'fixed_width' => 'large'
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'layout' => [
      'label' => 'Layout',
      'type' => 'select-img',
      'default' => '1-1',
      'title' => 'Select a grid layout',
      'options' => [
        '1-1' => [
          'label' => 'Whole',
          'src' => $this->get('url:images/whole.svg')
        ],
        ',' => [
          'label' => 'Halves',
          'src' => $this->get('url:images/halves.svg')
        ],
        ',,' => [
          'label' => 'Thirds',
          'src' => $this->get('url:images/thirds.svg')
        ],
        ',,,|1-2,1-2,1-2,1-2' => [
          'label' => 'Quarters',
          'src' => $this->get('url:images/quarters.svg')
        ],
        '2-3,' => [
          'label' => 'Thirds 2-1',
          'src' => $this->get('url:images/thirds-2-1.svg')
        ],
        ',2-3' => [
          'label' => 'Thirds 1-2',
          'src' => $this->get('url:images/thirds-1-2.svg')
        ],
        '3-4,' => [
          'label' => 'Quarters 3-1',
          'src' => $this->get('url:images/quarters-3-1.svg')
        ],
        ',3-4' => [
          'label' => 'Quarters 1-3',
          'src' => $this->get('url:images/quarters-1-3.svg')
        ],
        '1-2,,|1-1,1-2,1-2' => [
          'label' => 'Quarters 2-1-1',
          'src' => $this->get('url:images/quarters-2-1-1.svg')
        ],
        ',,1-2|1-2,1-2,1-1' => [
          'label' => 'Quarters 1-1-2',
          'src' => $this->get('url:images/quarters-1-1-2.svg')
        ],
        ',1-2,' => [
          'label' => 'Quarters 1-2-1',
          'src' => $this->get('url:images/quarters-1-2-1.svg')
        ],
        'fixed,' => [
          'label' => 'Fixed-Left',
          'src' => $this->get('url:images/fixed-left.svg')
        ],
        ',fixed' => [
          'label' => 'Fixed-Right',
          'src' => $this->get('url:images/fixed-right.svg')
        ],
        ',fixed,' => [
          'label' => 'Fixed-Inner',
          'src' => $this->get('url:images/fixed-inner.svg')
        ],
        'fixed,,fixed' => [
          'label' => 'Fixed-Outer',
          'src' => $this->get('url:images/fixed-outer.svg')
        ]
      ]
    ],
    'columns' => [
      'label' => 'Columns',
      'description' => 'Set a background style or image for each column to create a tile.',
      'type' => 'children'
    ],
    'fixed_width' => [
      'label' => 'Fixed Width',
      'description' => 'Set a fixed column width or expand it to its content\'s width. The other column(s) will automatically fill the remaining space.',
      'type' => 'select',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'XX-Large' => 'xxlarge',
        'Auto' => 'auto'
      ],
      'show' => '$match(layout, \'fixed\')'
    ],
    'gutter' => [
      'label' => 'Gutter',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Medium' => 'medium',
        'Default' => '',
        'Large' => 'large',
        'Collapse' => 'collapse'
      ]
    ],
    'divider' => [
      'type' => 'checkbox',
      'text' => 'Display dividers between grid cells',
      'enable' => 'gutter != \'collapse\''
    ],
    'gutter_description' => [
      'description' => 'Set the grid gutter width and display dividers between grid cells.',
      'type' => 'description'
    ],
    'width' => [
      'label' => 'Max Width',
      'description' => 'Set the maximum content width. Note: The section may already have a maximum width, which you cannot exceed.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => 'default',
        'XSmall' => 'xsmall',
        'Small' => 'small',
        'Large' => 'large',
        'Expand' => 'expand',
        'None' => ''
      ]
    ],
    'width_expand' => [
      'label' => 'Expand One Side',
      'description' => 'Expand the width of one side to the left or right while the other side keeps within the constraints of the max width.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Don\'t expand' => '',
        'To left' => 'left',
        'To right' => 'right'
      ],
      'show' => '$match(width, \'^(default|small|large)$\')'
    ],
    'height' => [
      'label' => 'Height',
      'description' => 'Enabling viewport height on a row that directly follows the header will subtract the header\'s height from it.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Viewport' => 'full',
        'Viewport (Minus 20%)' => 'percent'
      ]
    ],
    'margin' => [
      'label' => 'Margin',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Keep existing' => '',
        'Small' => 'small',
        'Default' => 'default',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove-vertical'
      ]
    ],
    'margin_remove_top' => [
      'type' => 'checkbox',
      'text' => 'Remove top margin',
      'enable' => 'margin != \'remove-vertical\''
    ],
    'margin_remove_bottom' => [
      'description' => 'Set the vertical margin. Note: The first grid\'s top margin and the last grid\'s bottom margin are always removed. Define those in the section settings instead.',
      'type' => 'checkbox',
      'text' => 'Remove bottom margin',
      'enable' => 'margin != \'remove-vertical\''
    ],
    'match' => [
      'label' => 'Match Height',
      'description' => 'If only one panel element is published inside a column, expand its height to match larger columns.',
      'type' => 'checkbox',
      'text' => 'Match height of single panels'
    ],
    'breakpoint' => [
      'label' => 'Breakpoint',
      'description' => 'Set the breakpoint from which grid cells will stack.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Small (Phone Landscape)' => 's',
        'Medium (Tablet Landscape)' => 'm',
        'Large (Desktop)' => 'l',
        'X-Large (Large Screens)' => 'xl'
      ]
    ],
    'order_last' => [
      'label' => 'Order',
      'description' => 'Change the visual order for the last item of the grid. This only applies to the selected breakpoint. When stacked, items will appear in the same order as they do in the source code.',
      'type' => 'checkbox',
      'text' => 'Last item appears first'
    ],
    'status' => [
      'label' => 'Status',
      'description' => 'Disable your row and publish it later. It will only be shown to the editor while the customizer is open.',
      'type' => 'checkbox',
      'text' => 'Disable row',
      'attrs' => [
        'true-value' => 'disabled',
        'false-value' => ''
      ]
    ],
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls')
  ],
  'fieldset' => [
    'default' => [
      'fields' => [
        0 => 'layout',
        1 => 'columns',
        2 => 'fixed_width',
        3 => 'gutter',
        4 => 'divider',
        5 => 'gutter_description',
        6 => 'width',
        7 => 'width_expand',
        8 => 'height',
        9 => 'margin',
        10 => 'margin_remove_top',
        11 => 'margin_remove_bottom',
        12 => 'match',
        13 => 'breakpoint',
        14 => 'order_last',
        15 => 'status',
        16 => 'id',
        17 => 'class'
      ]
    ]
  ]
];
