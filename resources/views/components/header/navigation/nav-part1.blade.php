<ul class="flex w-full flex-col gap-2.5 sm:gap-5 xl:flex-row 2xl:gap-7.5">
    @foreach (__('navigation.part2') as $link => $name)
        @if (in_array($link, [ 'home','contacts', 'vacancies', 'blog', 'reviews']))
            <li
                class="transition-colors duration-200 hover:text-light-brown active:text-light-brown xl:hidden"
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @elseif (($link == 'promotions' ))
            <li
                class="hidden xl:block transition-colors duration-200 hover:text-light-brown active:text-light-brown"
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @else
            <li
                @class([
                    'transition-colors duration-200 hover:text-light-brown active:text-light-brown',
                    'text-light-brown ' => $loop->last,
                ])
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @endif
    @endforeach

    <x-header.navigation.drop-down-list />
</ul>
