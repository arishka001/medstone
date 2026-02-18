<div class="swiper relative w-full overflow-visible">
    <div class="swiper-wrapper">
        @foreach (__('pages/home.section-gallery.images') as $key => $item)
            <x-common.gallery.card :item="$item" :key="$key" />
        @endforeach
    </div>

    <x-common.gallery.scroll-btns />
</div>
