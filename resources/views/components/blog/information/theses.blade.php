<div class="flex flex-col gap-2.5 lg:w-1/3 xl:w-1/4">
    @foreach ($item['overviews'] as $overview)
        <a
            href="#{{ $overview['anchor'] }}"
            class="text-xl/[120%] text-nowrap transition-colors duration-200 hover:text-light-brown"
        >
            {{ $loop->iteration }} .
            <span class="text-wrap underline underline-offset-4">
                {{ $overview['name'] }}
            </span>
        </a>
    @endforeach
</div>
