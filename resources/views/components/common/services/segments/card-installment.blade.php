<li
    class="relative hidden overflow-hidden rounded-3xl bg-[#FBFBFB] p-5 sm:flex lg:p-8.25"
>
    <img
        src="{{ Vite::image('components/services/bg-installment.png') }}"
        alt=""
        class="absolute -top-5 -right-18 h-58.75 w-87.5 lg:-top-18 lg:-right-14 lg:h-87.5 lg:w-128.75 xl:-top-26 xl:-right-11 xl:h-112.5 xl:w-162.5 2xl:-right-6"
    />

    <div class="relative z-10 flex w-2/3 flex-col items-start gap-5">
        <div
            class="rounded-xl bg-extra-light-brown px-2.5 py-1.75 text-base/[100%] text-white"
        >
            {{ __('common/services.block-installment.dates') }}
        </div>

        <div class="flex flex-col gap-2.5">
            <h3 class="text-2xl/[90%] lg:text-4xl/[90%]">
                {{ __('common/services.block-installment.title') }}
            </h3>

            <p class="text-base/[120%]">
                {!! __('common/services.block-installment.descr.part1') !!}
                <br />
                <span class="font-semibold">
                    {!! __('common/services.block-installment.descr.part2') !!}
                </span>
            </p>
        </div>
    </div>
</li>
