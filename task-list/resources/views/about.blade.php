<!-- resources/views/about.blade.php -->

<h2>我們是 {{ $team }}</h2>

<ul>
  @foreach ($members as $member)
    <li>{{ $member }}</li>
  @endforeach
</ul>
