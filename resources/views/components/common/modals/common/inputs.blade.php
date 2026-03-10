<div class="flex flex-col gap-2.5">
    <input type="hidden" id="vacancy-position-input" name="position" />
    <input id="callback-doctor-input" name="doctor" class="hidden" />
    <input
        type="text"
        name="name"
        placeholder="{{ __('common/modals.input-name') }}"
        class="w-full rounded-3xl bg-white px-5 py-4 text-base/[100%] outline-none placeholder:text-light-gray"
        required
    />
    <input
        type="tel"
        name="phone"
        placeholder="{{ __('common/modals.input-phone') }}"
        class="w-full rounded-3xl bg-white px-5 py-4 text-base/[100%] outline-none placeholder:text-light-gray"
        required
    />
    {{ $slot }}
</div>
