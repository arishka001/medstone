<form data-validate class="flex flex-col gap-2.5 lg:gap-5 xl:w-4/5 2xl:w-2/3">
    <div class="flex flex-col gap-2.5 rounded-3xl bg-white p-2.5 sm:flex-row">
        <input
            type="tel"
            class="h-12.5 w-full rounded-3xl bg-light-white px-5 text-base/[100%] text-light-gray outline-0"
            placeholder="{{ __('pages/blog.blog-page.btn-attribute.input') }}"
        />
        <x-buttons.callback-btn-dark
            type="submit"
            plus-class="hidden"
            class="group disabled:group disabled:cursor-not-allowed disabled:hover:bg-basic-brown disabled:hover:text-light-white sm:w-fit!"
        >
            {{ __('pages/blog.blog-page.btn-attribute.btn') }}
        </x-buttons.callback-btn-dark>
    </div>

    <x-common.agreement />
</form>
