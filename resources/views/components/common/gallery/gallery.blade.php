<section class="flex flex-col gap-10 lg:gap-15" id="gallery">
    <div class="container">
        <x-typography.second-header
            kicker="{{ __('pages/home.section-gallery.mini-text') }}"
            title="{!!  __('pages/home.section-gallery.title.part1') !!}"
            accent="{!!  __('pages/home.section-gallery.title.part2') !!}"
        />
    </div>

    <div class="swiper relative w-full overflow-visible">
        <div class="swiper-wrapper">
            @foreach (__('pages/home.section-gallery.images') as $key => $item)
                <x-common.gallery.card :item="$item" :key="$key" />
            @endforeach
        </div>

        <x-common.gallery.scroll-btns />
    </div>
</section>
