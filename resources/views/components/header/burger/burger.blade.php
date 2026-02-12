<div
    class="burger fixed top-20 right-0 bottom-0 left-0 z-40 hidden bg-white xl:relative xl:top-0 xl:flex xl:h-full xl:w-full xl:gap-22.5 xl:rounded-b-3xl xl:font-medium"
>
    <div
        class="container flex h-full flex-col justify-between gap-2.5 py-8.75 sm:gap-5 sm:py-10 xl:h-21.25 xl:flex-row xl:items-center xl:py-0"
    >
        <div class="flex">
            <x-header.navigation.navigation />
            <x-common.social-media
                class="hidden lg:flex lg:flex-col xl:hidden"
                link-class="size-12.5 rounded-xl bg-light-white sm:size-15"
            />
        </div>
        <div class="flex flex-col gap-7.5 sm:gap-5">
            <x-header.burger.contacts class="xl:hidden" />
            <x-common.social-media
                class="lg:hidden"
                link-class="size-12.5 rounded-xl bg-light-white sm:size-15"
            />

            <x-buttons.callback-btn>
                {{ __('header.callback-btn') }}
            </x-buttons.callback-btn>
        </div>
    </div>
</div>
