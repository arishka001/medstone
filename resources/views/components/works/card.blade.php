<div @class([
    'swiper-slide' => ! request()->routeIs('works'),
])>
    <div
        @class(['work-card flex flex-col gap-5 rounded-3xl bg-[#FBFBFB] p-2.5 xl:p-5'])
        data-direction="{{ $item['direction'] }}"
    >
        <div
            class="flex h-57.5 w-full overflow-hidden rounded-3xl xl:h-68.75 2xl:h-85"
        >
            <img
                src="{{ Vite::image('works/' . $item['img']) }}"
                alt=""
                class="h-full w-full rounded-3xl object-cover object-top"
            />
        </div>

        <h3 class="w-5/6 text-xl/[100%] sm:w-full">
            {{ $item['descr'] }}
        </h3>
    </div>
</div>
