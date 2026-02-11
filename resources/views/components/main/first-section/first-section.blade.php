<section
    class="relative flex flex-col gap-10 overflow-hidden bg-light-white py-10 lg:pt-14.5 xl:gap-33.75"
>
    <img
        src="{{ Vite::image('main/home-first-section.png') }}"
        alt=""
        class="absolute top-64 -left-10 z-0 w-full sm:hidden lg:top-0 lg:left-85 lg:block lg:h-full lg:w-auto xl:left-130"
    />

    <div class="relative container flex flex-col sm:gap-7.5">
        <div class="flex flex-col gap-5">
            <x-main.first-section.procedures />

            <x-main.first-section.text />
        </div>

        <x-main.first-section.buttons />
    </div>

    <x-main.first-section.services />
</section>
