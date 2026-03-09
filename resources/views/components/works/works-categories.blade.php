@if (request()->routeIs('works'))
    <div class="relative w-full">
        <div class="container"></div>
        <div
            id="works-filter"
            class="no-scrollbar flex w-full gap-2.5 overflow-x-scroll"
        >
            <button
                onclick="filterWorks('all')"
                id="filter-all"
                class="work-filter flex shrink-0 cursor-pointer items-center justify-center rounded-3xl border border-basic-brown bg-[#FBFBFB] px-5 py-3.75 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown xl:text-lg/[120%]"
            >
                {{ __('pages/works.breadcrumb') }}
            </button>

            @foreach (__('pages/works.works-categories') as $key => $category)
                <button
                    onclick="filterWorks('{{ $key }}')"
                    id="filter-{{ $key }}"
                    class="work-filter flex cursor-pointer items-center justify-center rounded-3xl border border-basic-brown bg-[#FBFBFB] px-5 py-3.75 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown xl:text-lg/[120%]"
                >
                    {{ $category['name'] }}
                </button>
            @endforeach
        </div>
    </div>
@endif
