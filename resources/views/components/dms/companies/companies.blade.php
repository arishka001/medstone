<section>
    <div class="flex flex-col gap-10 lg:gap-15">
        @if (! request()->routeIs('dms'))
            <div class="container">
                <x-typography.second-header
                    kicker="{{ __('pages/dms.section-companies.mini-text') }}"
                    title="{{ __('pages/dms.section-companies.title.part1') }}"
                    accent="{{ __('pages/dms.section-companies.title.part2') }}"
                />
            </div>
        @endif

        <div class="flex w-full flex-col gap-2.5 overflow-hidden">
            <div class="flex w-max animate-marquee-reverse gap-2.5">
                @foreach ([...__('pages/dms.section-companies.forward'), ...__('pages/dms.section-companies.forward')] as $item)
                    <div
                        class="flex h-25 w-62.5 items-center justify-center rounded-3xl bg-[#FBFBFB] px-10 py-5 sm:h-35 sm:w-73 2xl:h-40 2xl:w-95"
                    >
                        <img
                            src="{{ Vite::image('pages/dms/companies/' . $item['img']) }}"
                            alt="{{ $item['alt'] }}"
                            class="h-auto w-2/3"
                        />
                    </div>
                @endforeach
            </div>

            <div class="flex w-max animate-marquee gap-2.5">
                @foreach ([...__('pages/dms.section-companies.reverse'), ...__('pages/dms.section-companies.reverse')] as $item)
                    <div
                        class="flex h-25 w-62.5 items-center justify-center rounded-3xl bg-[#FBFBFB] px-10 py-5 sm:h-35 sm:w-73 2xl:h-40 2xl:w-95"
                    >
                        <img
                            src="{{ Vite::image('pages/dms/companies/' . $item['img']) }}"
                            alt="{{ $item['alt'] }}"
                            class="h-auto w-2/3"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
