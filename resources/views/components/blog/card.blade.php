<div
    @class([
        'group flex flex-col gap-5 rounded-3xl bg-[#FBFBFB] p-2.5 transition-all duration-300 hover:shadow-card',
        'hidden sm:flex' => $loop->index > 1,
    ])
>
    <img
        src="{{ vite::image('blog/' . $item['img']) }}"
        alt=""
        class="h-57.5 w-full rounded-2xl object-cover object-top xl:h-68.75 2xl:h-85"
    />

    <h3 class="text-xl/[100%] sm:w-4/5 2xl:w-full">
        {!! $item['title'] !!}
    </h3>

    <p class="hidden w-11/12 text-base/[120%] xl:block">
        {!! $item['descr'] !!}
    </p>

    <x-buttons.callback-btn
        class="group-hover:bg-basic-brown group-hover:text-light-white"
    >
        {{ __('pages/blog.btn-details') }}
    </x-buttons.callback-btn>
</div>
