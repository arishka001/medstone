<div class="relative w-full">
    <div class="container"></div>

    <div
        class="prices-filter no-scrollbar flex gap-2.5 overflow-x-scroll py-px"
    >
        @if (! empty($segment['general-prices-list']))
            <button
                onclick="showPrices('general')"
                id="tab-general"
                class="price-tab w-fit cursor-pointer rounded-3xl border bg-[#FBFBFB] px-7.5 py-5.5 text-base/[120%] text-nowrap transition-all duration-200 hover:border-light-brown hover:text-light-brown sm:p-7.5"
            >
                {{ __('common/services.section-segments.segments-details-price.table.general-prices') }}
            </button>
        @endif

        @foreach ($segment['sublist'] as $key => $sub)
            <button
                onclick="showPrices('{{ $sub['main']['anchor'] }}')"
                id="tab-{{ $sub['main']['anchor'] }}"
                class="price-tab w-fit cursor-pointer rounded-3xl border bg-[#FBFBFB] px-7.5 py-5.5 text-base/[120%] text-nowrap transition-all duration-200 hover:border-light-brown hover:text-light-brown sm:p-7.5"
            >
                {{ $sub['main']['name'] }}
            </button>
        @endforeach
    </div>
</div>
