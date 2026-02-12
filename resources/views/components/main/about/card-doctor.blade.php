<div class="flex flex-col gap-2.5 lg:gap-5">
    <p
        class="font-[Denistina] text-2xl/[100%] text-light-brown italic sm:text-3xl/[100%] xl:w-5/6"
    >
        {{ __('pages/home.section-about.autor-text') }}
    </p>

    <div class="self-end lg:flex lg:justify-between lg:self-auto">
        <x-buttons.callback-btn
            class="group hidden lg:flex lg:w-fit lg:self-end lg:px-10"
        />
        <img
            src="{{ Vite::image('main/signature.svg') }}"
            alt=""
            class="h-auto w-37.5 self-end sm:w-57.5 xl:w-70 2xl:w-86.25"
        />
    </div>
</div>
