<li
    class="swiper relative w-full overflow-hidden rounded-3xl"
    id="offers-block"
>
    <div class="swiper-wrapper">
        @foreach (__('pages/home.offers-list') as $key => $item)
            <div class="swiper-slide relative p-5">
                <img
                    src="{{ Vite::image('main/' . $item['img']) }}"
                    alt=""
                    class="pointer-events-none absolute inset-0 z-0 h-full w-full object-cover"
                />
                <div class="absolute inset-0 z-10 bg-[#3A1F20B2]"></div>
                <div
                    class="relative z-20 flex w-full flex-col gap-5 text-white sm:gap-2.5 xl:pb-10"
                >
                    <h3 class="w-2/3 text-2xl/[100%] sm:w-full">
                        {!! $item['title'] !!}
                    </h3>
                    <p class="text-base/[120%] sm:w-2/3 lg:w-4/5 xl:w-full">
                        {!! $item['descr'] !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <x-main.first-section.offers.scroll-btns
        class="top-5 right-5 sm:top-auto sm:bottom-5"
    />
</li>
