<section
    class="flex flex-col gap-5 overflow-hidden sm:gap-10 lg:gap-15"
    id="review"
>
    <div class="container flex flex-col gap-10 sm:flex-row sm:justify-between">
        <x-typography.second-header
            kicker="{{ __('common/reviews.mini-text') }}"
            title="{{ __('common/reviews.title.part1') }}"
            accent="{{ __('common/reviews.title.part2') }}"
        />

        <x-buttons.scroll-buttons />
    </div>

    <div class="swiper w-full overflow-visible">
        <div class="swiper-wrapper">
            @foreach (__('common/reviews.reviews-list') as $key => $item)
                <x-common.reviews.card :item="$item" />
            @endforeach
        </div>
    </div>
</section>
