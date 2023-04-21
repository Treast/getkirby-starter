<nav class="container grid">
  <div class="logo">
    @if ($logo = $site->homePage()->logo()->toFile())
      <a href="{{ $site->homePage()->url() }}">
        <img src="{{ $logo->url() }}" alt="{{ $logo->alt() }}">
      </a>
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
