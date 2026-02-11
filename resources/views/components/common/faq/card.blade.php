<div
    @class([
        'faq-accordion flex flex-col gap-5 self-start rounded-3xl bg-[#FBFBFB] p-5',
        'hidden xl:flex' => $loop->index > 4,
    ])
>
    <div class="flex items-center justify-between">
        <h4
            class="w-4/5 text-lg/[100%] font-normal sm:w-full sm:text-2xl/[100%]"
        >
            {{ $item['question'] }}
        </h4>

        <x-svg.arrow
            class="faq-btn rotate-90 rounded-xl bg-[#F4F4F4] text-basic-brown"
        />
    </div>

    <p
        class="faq-answer hidden text-base/[100%] sm:w-4/5 sm:text-xl/[100%] sm:font-light"
    >
        {{ $item['answer'] }}
    </p>
</div>
