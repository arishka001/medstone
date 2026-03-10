<x-layouts.app>
    <section class="pt-7.5 sm:pt-10 lg:pt-15">
        <div class="container flex flex-col gap-10 lg:gap-15">
            <x-common.page-header
                title="{{ __('pages/contacts.title.part1') }}"
            />

            <x-footer.contacts />

            <x-footer.map />
        </div>
    </section>

    <x-contacts.requisites />
</x-layouts.app>
