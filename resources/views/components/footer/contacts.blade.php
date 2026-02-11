<div class="flex flex-col gap-10 lg:gap-15">
    <x-typography.second-header
        class="lg:flex-col! lg:gap-5!"
        kicker="{{ __('footer.contacts.mini-text') }}"
        title="{{ __('footer.contacts.title') }}"
    />

    <div class="flex flex-col gap-5 sm:gap-7.5">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-2.5">
            <x-contacts.telephone class="sm:text-2xl/tight" />

            <div class="flex flex-col gap-2.5">
                <x-contacts.address class="sm:text-2xl/tight" />

                <x-buttons.set-up-route-btn />
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-2.5">
            <x-contacts.work-hours class="text-xl sm:text-2xl/tight" />

            <div class="flex flex-col gap-2.5">
                <x-contacts.mail class="sm:text-2xl/tight" />

                <x-common.social-media />
            </div>
        </div>
    </div>
</div>
