<li
    class="flex flex-col items-center justify-between rounded-3xl bg-[#FFF8F3] px-5 py-7.5 lg:gap-5"
>
    <div class="flex flex-col items-center gap-2.5 text-center">
        <span
            class="text-[80px]/[120%] xl:text-[100px]/[120%] 2xl:text-[120px]/[120%]"
        >
            {{ __('common/services.section-indicators.3.count') }}
        </span>
        <p class="text-base/[100%]">
            {!! __('common/services.section-indicators.3.text') !!}
        </p>
    </div>

    <div class="relative h-20 w-full self-center overflow-hidden 2xl:h-27.5">
        <img
            src="{{ Vite::image('components/services/indicators/bg-indicators-3.1.png') }}"
            alt=""
            class="absolute left-1/2 z-9 size-20 -translate-x-25 rounded-full border-2 border-extra-light-brown object-cover lg:-translate-x-22 2xl:size-27.5 2xl:-translate-x-35"
        />
        <img
            src="{{ Vite::image('components/services/indicators/bg-indicators-3.2.png') }}"
            alt=""
            class="absolute left-1/2 z-20 size-20 -translate-x-1/2 rounded-full border-2 border-extra-light-brown object-cover 2xl:size-27.5"
        />
        <img
            src="{{ Vite::image('components/services/indicators/bg-indicators-3.3.png') }}"
            alt=""
            class="absolute left-1/2 z-30 size-20 translate-x-6 rounded-full border-2 border-extra-light-brown object-cover lg:translate-x-4 2xl:size-27.5 2xl:translate-x-8"
        />
    </div>
</li>
