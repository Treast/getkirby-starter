@snippet('layouts/header')

<main class="container">
  <h1>{{ $page->title() }}</h1>
  <h2>Derniers projets</h2>
  <ul class="projects grid">
    @foreach ($site->find('portfolio')->children()->listed()->sortBy('date', 'desc')->limit(3) as $project)
      <li>
        @snippet('components/picture', ['image' => $project->cover()->toFile()])
        <h3>{{ $project->title() }}</h3>
      </li>
    @endforeach
  </ul>
</main>


@snippet('layouts/footer')
