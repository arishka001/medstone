<x-layouts.app>
    <section class="pt-7.5 sm:pt-10 lg:pt-15">
        <div class="container flex flex-col gap-10 lg:gap-15">
            <div class="flex flex-col gap-5">
                <x-common.breadscrumbs />

                <h1
                    class="text-[42px]/[80%] font-normal sm:text-5xl/[80%] lg:text-6xl/[80%] xl:text-7xl/[80%] 2xl:text-[82px]/[80%]"
                >
                    {{ __('pages/contacts.title.part1') }}
                </h1>
            </div>

            <x-footer.contacts />

            <x-footer.map />
        </div>
    </section>

    <x-contacts.requisites />
</x-layouts.app>
