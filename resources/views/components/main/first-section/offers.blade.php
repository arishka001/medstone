<li class="relative overflow-hidden rounded-3xl">
    <img
        src="{{ Vite::image('main/bg-offers.png') }}"
        alt=""
        class="pointer-events-none absolute inset-0 z-0 h-full w-full object-cover"
    />

    <div class="absolute inset-0 z-10 bg-[#3A1F20B2]"></div>

    <div
        class="relative z-10 flex items-center justify-between gap-5 p-5 text-white xl:flex-col xl:gap-0"
    >
        <div class="flex flex-col gap-5 sm:gap-2.5">
            <div class="flex items-start justify-between">
                <h3 class="text-2xl/[100%] xl:w-5/6">
                    {{ __('pages/home.offers.title') }}
                </h3>
                <x-buttons.scroll-buttons class="sm:hidden" />
            </div>

            <p class="text-base/[120%] sm:w-2/3 lg:w-full">
                {{ __('pages/home.offers.descr') }}
            </p>
        </div>

        <x-buttons.scroll-buttons class="hidden sm:flex" />
    </div>
</li>
