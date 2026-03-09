<div class="relative w-full">
    <div class="container"></div>
    <div class="prices-filter no-scrollbar flex gap-2.5 overflow-x-scroll">
        @foreach (__('pages/prices.categories') as $key => $category)
            <button
                onclick="showPrices('{{ $key }}')"
                id="tab-{{ $key }}"
                class="price-tab flex shrink-0 cursor-pointer items-center overflow-hidden rounded-3xl border bg-[#FBFBFB] text-base/[120%] text-nowrap transition-all duration-200 hover:border-light-brown hover:text-light-brown xl:text-lg/[120%]"
            >
                <span class="p-5 sm:px-7.5 sm:py-5.5">
                    {{ $category['name'] }}
                </span>
                <img
                    src="{{ Vite::image('pages/prices/categories/' . $category['img']) }}"
                    alt=""
                    class="h-15 w-auto shrink-0 self-end xl:h-20"
                />
            </button>
        @endforeach
    </div>
</div>
