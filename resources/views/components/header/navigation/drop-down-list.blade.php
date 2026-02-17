<li
    class="drop-down-block relative hidden cursor-pointer text-base xl:block xl:self-center"
>
    <x-header.navigation.drop-down-btn />

    <ul
        class="drop-down-list absolute top-6 right-0 hidden flex-col gap-1.25 rounded-xl bg-white p-4 shadow-custom group-hover:flex"
    >
        @foreach (__('navigation.part2') as $link => $name)
            @if (in_array($link, ['vacancies', 'blog', 'reviews', 'contacts']))
                <li class="transition-colors duration-200 hover:text-[#B1B1B1]">
                    <a href="{{ route($link) }}">
                        {{ $name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
