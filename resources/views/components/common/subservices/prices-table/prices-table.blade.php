@props([
    'service',
    'segment',
])

<section id="price-tabs-section">
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('common/services.section-segments.segments-details-price.mini-text') }}"
            title="{{ $segment['title-prices']['part1'] }}"
            accent="{{ $segment['title-prices']['part2'] }}"
        />

        <div class="no-scrollbar flex gap-2.5 overflow-x-scroll">
            @if (! empty($segment['general-prices-list']))
                <button
                    onclick="showPrices('general')"
                    id="tab-general"
                    class="price-tab w-fit cursor-pointer rounded-3xl border bg-[#FBFBFB] px-7.5 py-5.5 text-base/[120%] text-nowrap transition-all duration-200 sm:p-7.5"
                >
                    {{ __('common/services.section-segments.segments-details-price.table.general-prices') }}
                </button>
            @endif

            @foreach ($segment['sublist'] as $key => $sub)
                <button
                    onclick="showPrices('{{ $sub['main']['anchor'] }}')"
                    id="tab-{{ $sub['main']['anchor'] }}"
                    class="price-tab w-fit cursor-pointer rounded-3xl border bg-[#FBFBFB] px-7.5 py-5.5 text-base/[120%] text-nowrap transition-all duration-200 sm:p-7.5"
                >
                    {{ $sub['main']['name'] }}
                </button>
            @endforeach
        </div>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-[#FBFBFB]">
                    <th
                        class="rounded-3xl px-7.5 py-6.25 text-left text-base/[120%] font-normal text-nowrap text-light-gray sm:hidden"
                    >
                        {{ __('common/services.section-segments.segments-details-price.table.thead.procedure') }}
                        {{ __('common/services.section-segments.segments-details-price.table.thead.and') }}
                        {{ __('common/services.section-segments.segments-details-price.table.thead.price') }}
                    </th>
                    <th
                        class="hidden rounded-l-3xl p-7.5 text-left text-base/[120%] font-normal text-nowrap text-light-gray sm:table-cell"
                    >
                        {{ __('common/services.section-segments.segments-details-price.table.thead.procedure') }}
                    </th>
                    <th
                        class="hidden rounded-r-3xl px-15 py-7.5 text-left text-base/[120%] font-normal text-nowrap text-light-gray sm:table-cell lg:px-37.5"
                    >
                        {{ __('common/services.section-segments.segments-details-price.table.thead.price') }}
                    </th>
                </tr>
            </thead>

            @if (! empty($segment['general-prices-list']))
                <tbody id="general" class="prices-body hidden">
                    @foreach ($segment['general-prices-list'] as $price)
                        <x-common.subservices.prices-table.price-row
                            :price="$price"
                        />
                    @endforeach
                </tbody>
            @endif

            @foreach ($segment['sublist'] as $key => $sub)
                <tbody
                    id="{{ $sub['main']['anchor'] }}"
                    class="prices-body hidden"
                >
                    @foreach ($sub['prices'] as $price)
                        <x-common.subservices.prices-table.price-row
                            :price="$price"
                        />
                    @endforeach
                </tbody>
            @endforeach
        </table>

        <x-buttons.callback-btn-dark class="w-full self-center sm:w-fit">
            {{ __('pages/home.first-section.btns.consultation') }}
        </x-buttons.callback-btn-dark>
    </div>
</section>
