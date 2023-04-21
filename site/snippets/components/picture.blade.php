<?php
$sizes = '(min-width: 1200px) 25vw, (min-width: 1366px) 33vw, (min-width: 768px) 50vw, 100vw';
?>

<picture>
  <source srcset="{{ $image->srcset('avif') }}" type="image/avif" sizes="{{ $sizes }}">
  <source srcset="{{ $image->srcset('webp') }}" type="image/webp" sizes="{{ $sizes }}">
  <img alt="{{ $image->alt() }}" src="{{ $image->resize(300)->url() }}" srcset="{{ $image->srcset() }}"
    width="{{ $image->width() }}" height="{{ $image->height() }}" sizes="{{ $sizes }}">
</picture>
