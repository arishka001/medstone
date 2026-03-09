<div class="flex w-full flex-col gap-2.5 text-base">
    <label>
        <input
            type="text"
            name="name"
            placeholder="{{ __('footer.form.name') }}"
            class="h-15 w-full rounded-3xl bg-[#776459] px-5 outline-0"
        />
    </label>

    <label>
        <input
            type="tel"
            name="number"
            placeholder="{{ __('footer.form.number') }}"
            class="h-15 w-full rounded-3xl bg-[#776459] px-5 outline-0"
        />
    </label>

    <button
        type="submit"
        data-form-name="{{ __('footer.form.btn') }}"
        data-question="true"
        class="flex h-15 w-full cursor-pointer items-center justify-center rounded-3xl bg-white leading-none text-basic-brown transition-all duration-200 hover:hover:bg-[#EDEDED] disabled:cursor-not-allowed disabled:opacity-100 disabled:hover:bg-white"
        tabindex="0"
    >
        {{ __('footer.form.btn') }}
    </button>

    <x-common.agreement class="text-white" />
</div>
