<nav
    class="header-nav flex w-full gap-4 text-lg/[100%] sm:gap-7 sm:text-3xl/[100%] lg:gap-20 lg:text-4xl/[100%] xl:h-full xl:gap-5 xl:text-base xl:text-nowrap"
>
    <ul class="flex w-full flex-col gap-2.5 sm:gap-5 xl:flex-row">
        @foreach (__('navigation.part1') as $link => $name)
            <li
                @class([
                    'nav-link flex transition-colors duration-200 hover:text-light-brown xl:items-center',
                    'xl:border-b-3 xl:border-light-brown xl:text-light-brown' => request()->routeIs(
                        $link,
                    ),
                ])
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @endforeach
    </ul>

    <ul class="flex w-full flex-col gap-2.5 sm:gap-5 xl:flex-row">
        @foreach (__('navigation.part2') as $link => $name)
            @if (in_array($link, ['contacts', 'vacancies', 'blog', 'reviews']))
                <li
                    class="nav-link transition-colors duration-200 hover:text-light-brown xl:hidden"
                >
                    <a href="{{ route($link) }}">{{ $name }}</a>
                </li>
            @else
                <li
                    @class([
                        'nav-link some flex transition-colors duration-200 hover:text-light-brown xl:items-center',
                        'xl:border-b-3 xl:border-light-brown xl:text-light-brown' => request()->routeIs(
                            $link,
                        ),
                        'text-light-brown ' => $loop->last,
                    ])
                >
                    <a href="{{ route($link) }}">{{ $name }}</a>
                </li>
            @endif
        @endforeach

        <x-header.navigation.drop-down-list />
    </ul>
</nav>
