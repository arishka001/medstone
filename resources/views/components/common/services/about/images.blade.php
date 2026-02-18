<div class="w-full swiper">
    <div class="swiper-wrapper">
        @foreach (__('pages/home.section-gallery.images') as $key => $item)
            <div class="swiper-slide transition-all duration-300">
                <div
                    class="flex h-110 w-full items-center justify-between rounded-3xl p-5 sm:h-125 lg:h-205 xl:h-165 2xl:h-180"
                >
                    <img
                        src="{{ Vite::image('components/gallery/' . $item) }}"
                        alt=""
                        class="absolute inset-0 z-0 h-full w-full rounded-3xl object-cover"
                    />
                </div>
            </div>
        @endforeach
    </div>

    <div
        class="absolute top-1/2 right-0 left-0 z-20 container flex h-full -translate-y-1/2 items-center justify-between"
    >
        <x-svg.arrow
            class="swiper-prev rotate-180 rounded-xl sm:ml-5 sm:size-15"
        />
        <x-svg.arrow class="swiper-next rounded-xl sm:mr-5 sm:size-15" />
    </div>

</div>
