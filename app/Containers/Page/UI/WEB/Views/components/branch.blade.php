{{ $slot }}
<ul class="branch">
    @foreach($branch[$entryPoint] as $slug => $item)
        <li>
            <a href="{{ route('inner_page', $slug) }}">{{ $item->name }}</a>
            @isset($branch[$item->id])
            <x-branch entry-point="{{ $item->id }}"/>
            @endisset
        </li>
    @endforeach
</ul>