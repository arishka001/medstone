<x-layouts.app>
    <section class="flex flex-col gap-10 pt-7.5 sm:pt-10 lg:gap-15 lg:pt-15">
        <x-common.page-header
            title=" {{ __('pages/doctors.title-page-doctors') }}"
        />

        <x-doctors.doctors-categories />

        <div class="container">
            <x-doctors.list />
        </div>
    </section>
</x-layouts.app>
