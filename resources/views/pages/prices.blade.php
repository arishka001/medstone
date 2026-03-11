<x-layouts.app
    title="{{__('pages/prices.meta.title')}}"
    description="{{__('pages/prices.meta.description')}}"
>
    <section class="flex flex-col gap-10 pt-7.5 sm:pt-10 lg:gap-15 lg:pt-15">
        <x-common.page-header
            class="container"
            title="{{ __('pages/prices.title') }}"
        />

        <x-prices.prices />
    </section>
</x-layouts.app>
