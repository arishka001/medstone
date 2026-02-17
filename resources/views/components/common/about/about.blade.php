<section>
    <div class="container flex flex-col gap-10 overflow-hidden lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('pages/home.section-about.mini-text') }}"
            title="{{ __('pages/home.section-about.title.part1') }}"
            accent="{{ __('pages/home.section-about.title.part2') }}"
        />

        <div
            class="flex flex-col gap-5 rounded-3xl bg-[#FBFBFB] p-5 lg:flex-row lg:items-stretch lg:gap-16.25 lg:p-7.5"
        >
            <div class="flex flex-col gap-10 lg:gap-20 2xl:gap-26.25">
                <div
                    class="flex flex-col gap-5 text-base sm:w-11/12 lg:w-full lg:text-xl/tight 2xl:w-11/12"
                >
                    <p>
                        {{ __('pages/home.section-about.descr.part1') }}
                    </p>
                    <p>
                        {{ __('pages/home.section-about.descr.part2') }}
                    </p>
                </div>

                <x-common.about.card-doctor />
            </div>

            <x-common.about.about-doctor />
        </div>
    </div>
</section>
