<li class="relative flex flex-col gap-6 rounded-3xl bg-[#FBFBFB] p-5">
    <div
        class="z-10 flex h-full flex-col justify-between text-start text-white"
    >
        <p class="text-base/[100%]">
            {!! __('common/services.section-indicators.2.text') !!}
        </p>

        <span
            class="text-[80px]/[120%] xl:text-[100px]/[120%] 2xl:text-[120px]/[120%]"
        >
            {{ __('common/services.section-indicators.2.count') }}
        </span>
    </div>

    <img
        src="{{ Vite::image('components/services/indicators/bg-indicators-2.png') }}"
        alt=""
        class="absolute inset-0 z-0 h-full w-full rounded-3xl object-cover"
    />
</li>
