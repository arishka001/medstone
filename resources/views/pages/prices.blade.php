<x-layouts.app>
    <section class="flex flex-col gap-10 pt-7.5 sm:pt-10 lg:gap-15 lg:pt-15">
        <div class="container flex flex-col gap-5">
            <x-common.breadscrumbs />

            <h1
                class="text-[42px]/[80%] font-normal sm:text-5xl/[80%] lg:text-6xl/[80%] xl:text-7xl/[80%] 2xl:text-[82px]/[80%]"
            >
                {{ __('pages/prices.title') }}
            </h1>
        </div>

        <x-prices.prices />
    </section>
</x-layouts.app>
