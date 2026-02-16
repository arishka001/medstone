<ul class="flex w-full flex-col gap-2.5 sm:gap-5 xl:flex-row 2xl:gap-7.5">
    @foreach (__('navigation.part1') as $link => $name)
        @if (($link == 'home'))
            <li
                class="hidden xl:block transition-colors duration-200 hover:text-light-brown active:text-light-brown"
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @else
            <li
                class="transition-colors duration-200 hover:text-light-brown active:text-light-brown"
            >
                <a href="{{ route($link) }}">{{ $name }}</a>
            </li>
        @endif
    @endforeach

    <li
        class="transition-colors text-light-brown duration-200 hover:text-light-brown active:text-light-brown xl:hidden"
    >
        <a href="{{ route($link) }}">
            {{ __('navigation.part2.promotions') }}
        </a>
    </li>
</ul>
