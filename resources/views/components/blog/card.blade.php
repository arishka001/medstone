@if (! request()->routeIs('blog') && $loop->index >= 4)
    @php
        return;
    @endphp
@endif

<a
    href="{{ route('article', $item['slug']) }}"
    data-direction="{{ $item['direction'] }}"
    @class([
        'blog-card group flex flex-col gap-5 rounded-3xl bg-[#FBFBFB] p-2.5 transition-all duration-300 hover:shadow-card',
        'hidden sm:flex' => $loop->index > 1 && ! request()->routeIs('blog'),
    ])
>
    <img
        src="{{ Vite::image('blog/' . $item['img']) }}"
        alt=""
        class="h-full w-full rounded-2xl object-cover object-top xl:h-70 2xl:h-85"
    />

    <h3 class="text-xl/[100%]">
        {!! $item['name'] !!}
    </h3>

    <p class="hidden w-11/12 text-base/[120%] xl:block">
        {!! $item['descr'] !!}
    </p>

    <x-buttons.callback-btn
        class="mt-auto group-hover:bg-basic-brown group-hover:text-light-white"
    >
        {{ __('pages/blog.btn-details') }}
    </x-buttons.callback-btn>
</a>
