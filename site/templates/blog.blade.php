@snippet('layouts/header')

<main class="container">
  {!! $page->text()->toBlocks() !!}
</main>


@snippet('layouts/footer')
