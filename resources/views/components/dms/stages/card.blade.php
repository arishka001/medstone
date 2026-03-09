<li
    class="flex flex-col items-start gap-5 rounded-3xl border-l border-l-light-brown bg-[#FBFBFB] p-5 sm:p-7.5 lg:gap-10 xl:gap-28 xl:p-6"
>
    <div class="flex flex-col gap-5">
        <div
            class="flex size-10 items-center justify-center rounded-xl bg-white text-xl/[120%] text-light-brown"
        >
            {{ $item['number'] }}
        </div>
        <h3
            class="w-5/6 text-xl/[100%] sm:text-2xl/[100%] lg:text-3xl/[100%] xl:w-full"
        >
            {!! $item['title'] !!}
        </h3>
    </div>

    <div
        @class([
            'mt-auto pr-5 text-base/[120%] sm:p-0',
            'flex flex-col gap-1.5 sm:gap-2.5' => is_array($item['descr']),
        ])
    >
        @if (is_array($item['descr']))
            @foreach ($item['descr'] as $text)
                <p>
                    {!! $text !!}
                </p>
            @endforeach
        @else
            {!! $item['descr'] !!}
        @endif
    </div>
</li>
