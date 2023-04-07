<?php

return [
  'blocks' => [
    'fieldsets' => [
      'text' => [
        'label' => 'Text',
        'type' => 'group',
        'fieldsets' => [
          'text',
          'heading',
          'list',
          'quote',
          'table'
        ]
      ],
      'media' => [
        'label' => 'Media',
        'type' => 'group',
        'fieldsets' => [
          'image',
          'video',
          'gallery'
        ]
      ],
      'code' => [
        'label' => 'Code',
        'type' => 'group',
        'fieldsets' => [
          'code',
          'markdown'
        ]
      ]
    ]
  ]
];
