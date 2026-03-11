<x-layouts.app
    title="{{__('pages/vacancies.meta.title')}}"
    description="{{__('pages/vacancies.meta.description')}}"
>
    <section class="pt-7.5 sm:pt-10 lg:pt-15">
        <div class="container flex flex-col gap-10 lg:gap-15">
            <x-common.page-header title="{{ __('pages/vacancies.title') }}" />

            <x-vacancies.vacancies />
        </div>
    </section>
</x-layouts.app>
