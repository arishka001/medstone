@props([
    'certificates' => null,
])

<section class="flex flex-col gap-5 sm:gap-10 lg:gap-15" id="certificates">
    <div
        class="container flex flex-col gap-10 sm:flex-row sm:justify-between sm:gap-0"
    >
        <x-typography.second-header
            kicker="{{ __('pages/doctors.section-certifications.mini-text') }}"
            title="{!!   __('pages/doctors.section-certifications.title.part1') !!}"
            accent="{!! __('pages/doctors.section-certifications.title.part2') !!}"
        />

        <x-buttons.scroll-buttons />
    </div>

    <div class="swiper w-full overflow-visible">
        <div class="swiper-wrapper py-3 sm:py-5">
            @foreach ($certificates as $key => $item)
                <div class="swiper-slide">
                    <div
                        class="group flex gap-3 rounded-3xl bg-[#FBFBFB] p-7.5 shadow-card shadow-transparent transition-all duration-300 hover:shadow-black/10"
                    >
                        <div class="flex flex-col items-start justify-between">
                            <h4 class="text-xl/[100%]">
                                {{ $item['name'] }}
                            </h4>

                            <x-svg.arrow
                                class="group-hover:bg-basic-brown group-hover:text-white"
                            />
                        </div>

                        <img
                            src="{{ Vite::image('doctors/certificates/' . $item['certificate']) }}"
                            alt=""
                            class="h-35 w-auto"
                        />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
