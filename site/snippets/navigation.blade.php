<nav class="container">
  <div class="logo">
    @if ($logo = $site->homePage()->logo()->toFile())
      <img src="{{ $logo->url() }}" alt="{{ $logo->alt() }}">
    @endif
  </div>
  <ul class="nav">
    @foreach ($site->children()->listed() as $page)
      <li @class(['nav-item', 'nav-item--active' => $page->isActive()])>
        <a href="{{ $page->url() }}">{{ $page->title() }}</a>
      </li>
    @endforeach
  </ul>
</nav>
