<section id="price-tabs-section">
    <div class="flex flex-col gap-10 lg:gap-15">
        <div class="container">
            <x-typography.second-header
                id="prices-title"
                kicker="{{ __('common/services.section-segments.segments-details-price.mini-text') }}"
                title="{{ $segment['title-prices']['part1'] }}"
                accent="{{ $segment['title-prices']['part2'] }}"
            />
        </div>

        <x-common.subservices.prices.tabs :segment="$segment" />

        <div class="container">
            <x-common.subservices.prices.table :segment="$segment" />
        </div>

        <div class="container flex justify-center">
            <x-buttons.callback-btn-dark class="w-full self-center sm:w-fit">
                {{ __('pages/home.first-section.btns.consultation') }}
            </x-buttons.callback-btn-dark>
        </div>
    </div>
</section>
