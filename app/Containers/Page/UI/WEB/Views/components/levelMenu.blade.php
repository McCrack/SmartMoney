<nav class="level_menu">
    {{ $slot }}
    @foreach($level as $slug => $name)
    <a href="{{ route('inner_page', $slug) }}">{{ $name }}</a>
    @endforeach
</nav>
