@php
    $segments = explode('.', $page);
    $path = '';
@endphp

<div class="flex items-center gap-1 w-fit text-base/[100%]">
    <a href="{{ route('home') }}">
        Главная
    </a>

    @foreach($segments as $index => $segment)

        @php
            $path .= ($index === 0 ? '' : '.') . $segment;
            $title = __('pages/' . $path . '.main-section.title.part1');
        @endphp

        <svg class="text-light-gray size-5" viewBox="0 0 20 20" fill="none">
            <path d="M7.5 15L12.5 10L7.5 5"
                  stroke="currentcolor"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>

        @if($index !== count($segments) - 1)
            <a href="{{ url(str_replace('.', '/', $path)) }}"
               class="text-light-gray">
                {{ $title }}
            </a>
        @else
            <span class="text-light-gray">
                {{ $title }}
            </span>
        @endif

    @endforeach

</div>
