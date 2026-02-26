@if (request()->routeIs('doctors'))
    <div class="no-scrollbar flex gap-2.5 overflow-x-scroll pr-1.5">
        <button
            onclick="filterDoctors('all')"
            id="filter-all"
            class="doctor-filter flex shrink-0 cursor-pointer items-center justify-center rounded-3xl border bg-[#FBFBFB] p-5 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown sm:px-7.5 sm:py-5.5"
        >
            {{ __('pages/doctors.all-doctors') }}
        </button>

        @foreach (__('pages/doctors.doctors-categories') as $key => $category)
            <button
                onclick="filterDoctors('{{ $key }}')"
                id="filter-{{ $key }}"
                class="doctor-filter flex shrink-0 cursor-pointer items-center overflow-hidden rounded-3xl border bg-[#FBFBFB] text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown"
            >
                <span class="p-5 sm:px-7.5 sm:py-5.5">
                    {{ $category['name'] }}
                </span>
                <img
                    src="{{ Vite::image('doctors/categories/' . $category['img']) }}"
                    alt=""
                    class="h-15 w-auto shrink-0 self-end xl:h-20"
                />
            </button>
        @endforeach
    </div>
@endif
