<section>
    <div class="container flex flex-col gap-10 overflow-hidden lg:gap-15" id="services-about">
        <x-typography.second-header class="w-11/12 sm:w-2/3 xl:w-3/5"
            kicker="{{ __('pages/home.section-about.mini-text') }}"
            title="{!!  __('pages/home.section-about.title-for-services.part1') !!}"
            accent="{!! __('pages/home.section-about.title-for-services.part2') !!}"
        />

            <div class="flex flex-col gap-10 bg-[#FBFBFB] rounded-3xl">
                <div
                    class="flex flex-col gap-10 p-5 sm:gap-5 lg:gap-7.5 lg:p-7.5"
                >
                    <x-common.services.about.text />

                    <x-common.services.about.card-doctor />
                </div>

                <x-common.services.about.images />
            </div>
    </div>
</section>
