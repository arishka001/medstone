<section class="overflow-hidden bg-light-white">
    <div
        class="relative container flex flex-col gap-10 py-10 lg:pt-14.5 xl:gap-33.75"
    >
        <img
            src="{{ Vite::image('main/first-section-bg.png') }}"
            alt=""
            class="absolute hidden lg:top-0 lg:left-150 lg:block lg:h-full lg:w-auto xl:left-180 2xl:left-220"
        />

        <div class="relative flex flex-col sm:gap-7.5">
            <div class="flex flex-col gap-5">
                <x-main.first-section.procedures />

                <x-main.first-section.text />
            </div>

            <x-main.first-section.buttons />
        </div>

        <x-main.first-section.services />
    </div>
</section>
