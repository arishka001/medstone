<li
    class="flex flex-col items-center justify-between gap-6 rounded-3xl bg-[#FBFBFB] px-5 pt-5 sm:pt-7.5 lg:gap-5"
>
    <div class="flex flex-col items-center gap-2.5 text-center">
        <span
            class="text-[80px]/[120%] xl:text-[100px]/[120%] 2xl:text-[120px]/[120%]"
        >
            {{ __('common/services.section-indicators.1.count') }}
        </span>
        <p class="text-base/[100%]">
            {!! __('common/services.section-indicators.1.text') !!}
        </p>
    </div>

    <img
        src="{{ Vite::image('components/services/indicators/bg-indicators-1.png') }}"
        alt=""
        class="w-full"
    />
</li>
