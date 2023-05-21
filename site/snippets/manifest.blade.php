{
"name": "{{ option('pwa.name', '') }}",
"short_name": "{{ option('pwa.short_name', '') }}",
"id": "{{ option('pwa.start_url', '') }}",
"start_url": "{{ option('pwa.start_url', '') }}",
"display": "{{ option('pwa.display', '') }}",
"theme_color": "{{ option('pwa.theme_color', '') }}",
"background_color": "{{ option('pwa.background_color', '') }}",
"orientation": "{{ option('pwa.orientation', '') }}",
"icons": [
    @foreach (option('pwa.logo_sizes', []) as $size)
      @if($image = site()->logo()->toFile()->thumb(['width' => $size, 'height' => $size, 'crop' => 'center']))
      {
        "src": "{{ $image->url() }}",
        "type": "{{$image->mime() }}",
        "sizes": "{{ $image->width() }}x{{ $image->height() }}",
        "purpose": "any maskable"
        @if ($loop->last) 
        }
        @else
        },
        @endif
      @endif
    @endforeach
  ]
}
