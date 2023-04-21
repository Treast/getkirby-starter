<?php

return [
  'debug' => true,
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
  ],
  'thumbs' => [
    'driver' => 'im',
    'srcsets' => [
      'default' => [
        '320w'  => ['width' => 320],
        '640w'  => ['width' => 640],
        '768w'  => ['width' => 768],
        '1024w'  => ['width' => 1024],
        '1366w'  => ['width' => 1366],
        '1600w' => ['width' => 1600],
        '1920w' => ['width' => 1920]
      ],
      'avif' => [
        '320w'  => ['width' => 320, 'format' => 'avif'],
        '640w'  => ['width' => 640, 'format' => 'avif'],
        '768w'  => ['width' => 768, 'format' => 'avif'],
        '1024w'  => ['width' => 1024, 'format' => 'avif'],
        '1366w'  => ['width' => 1366, 'format' => 'avif'],
        '1600w' => ['width' => 1600, 'format' => 'avif'],
        '1920w' => ['width' => 1920, 'format' => 'avif']
      ],
      'webp' => [
        '320w'  => ['width' => 320, 'format' => 'webp'],
        '640w'  => ['width' => 640, 'format' => 'webp'],
        '768w'  => ['width' => 768, 'format' => 'webp'],
        '1024w'  => ['width' => 1024, 'format' => 'webp'],
        '1366w'  => ['width' => 1366, 'format' => 'webp'],
        '1600w' => ['width' => 1600, 'format' => 'webp'],
        '1920w' => ['width' => 1920, 'format' => 'webp']
      ],
    ],
  ]
];
