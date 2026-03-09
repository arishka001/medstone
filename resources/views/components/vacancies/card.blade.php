<div
    @class([
        'group/accordion accordion flex cursor-pointer flex-col gap-5 self-start rounded-3xl bg-[#FBFBFB] p-5 xl:gap-7.5 xl:p-7.5',
    ])
>
    <div class="flex items-center justify-between">
        <h4
            class="w-4/5 text-lg/[100%] font-normal sm:w-full sm:text-2xl/[100%]"
        >
            {{ $item['position'] }}
        </h4>

        <div class="flex items-center gap-7.5 lg:gap-10 xl:gap-15 2xl:gap-22.5">
            <p
                class="hidden h-fit w-fit shrink-0 rounded-xl bg-[#F6F6F6] px-3 py-1.5 text-base/[90%] text-nowrap text-extra-light-brown sm:block"
            >
                {{ $item['experience'] }}
            </p>
            <x-svg.arrow
                class="btn-accordion rotate-90 rounded-xl bg-[#F4F4F4] text-basic-brown group-hover/accordion:bg-basic-brown group-hover/accordion:text-white"
            />
        </div>
    </div>

    <x-vacancies.answer-card :item="$item" />
</div>
