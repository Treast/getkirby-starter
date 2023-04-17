@snippet('header')

<main class="container">
  <h1>{{ $page->title() }}</h1>
  {!! $page->text()->toBlocks() !!}
</main>


@snippet('footer')
