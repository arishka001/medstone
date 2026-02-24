@if (request()->routeIs('doctors'))
    <div class="no-scrollbar flex gap-2.5 overflow-x-scroll">
        <button
            onclick="filterDoctors('all')"
            id="filter-all"
            class="doctor-filter flex w-fit cursor-pointer items-center justify-center rounded-3xl border bg-[#FBFBFB] px-7.5 py-5.5 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown"
        >
            {{ __('pages/doctors.all-doctors') }}
        </button>

        @foreach (__('pages/doctors.doctors-categories') as $key => $category)
            <button
                onclick="filterDoctors('{{ $key }}')"
                id="filter-{{ $key }}"
                class="doctor-filter flex w-fit cursor-pointer items-center gap-2.5 rounded-3xl border bg-[#FBFBFB] text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown"
            >
                <span class="px-7.5 py-5.5">
                    {{ $category['name'] }}
                </span>
                <img
                    src="{{ Vite::image('doctors/categories/' . $category['img']) }}"
                    alt=""
                    class="h-14 w-auto shrink-0 items-end object-cover xl:h-20"
                />
            </button>
        @endforeach
    </div>
@endif
