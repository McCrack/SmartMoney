<nav class="breadcrumbs">
    @foreach ($breadcrumbs as $slug => $name)
    <a href="{{ route('inner_page', $slug) }}">{{ $name }}</a>
    @endforeach
</nav>
