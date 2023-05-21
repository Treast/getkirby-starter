<!DOCTYPE html>
<html lang="en">

<head>
  @snippet('meta')
  @css('assets/main.min.css')
  <link rel="manifest" href="/manifest.json">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="{{ option('pwa.theme_color', '#fff') }}">
</head>

<body>
  <header>
    @snippet('layouts/navigation')
  </header>
