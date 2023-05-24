<nav class="container grid">
  <div class="logo">
    @if ($logo = $site->homePage()->logo()->toFile())
      <a href="{{ $site->homePage()->url() }}">
        <img src="{{ $logo->url() }}" alt="{{ $logo->alt() }}">
      </a>
    @endif
  </div>

  @if ($site->primaryMenu()->isNotEmpty())
    <ul class="nav">
      @foreach ($site->primaryMenu()->toStructure() as $nav)
        <li @class([
            'nav-item--active' => $nav->url()->value() === kirby()->url('current'),
        ])>
          <a href="{{ $nav->url() }}" {{ $nav->isOpen() ? 'aria-current' : '' }}>
            {{ $nav->text() }}
          </a>
          @if ($nav->children()->isNotEmpty())
            <ul>
              @foreach ($nav->children()->toStructure() as $child)
                <li>
                  <a href="{{ $child->url() }}">
                    {{ $child->text() }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endif
        </li>
      @endforeach
    </ul>
  @endif
</nav>
