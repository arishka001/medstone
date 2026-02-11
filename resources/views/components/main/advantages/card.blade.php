<li
    class="flex flex-col items-start gap-5 rounded-3xl border-l border-l-light-brown bg-[#FBFBFB] p-5 sm:p-7.5 lg:gap-10 xl:gap-32.5 xl:p-6"
>
    <div class="flex flex-col gap-5">
        <div
            class="flex size-10 items-center justify-center rounded-xl bg-white"
        >
            <img
                src="{{ Vite::image('main/advantages/' . $item['svg']) }}"
                alt=""
                class=""
            />
        </div>
        <h3
            class="w-4/5 text-xl/[100%] sm:w-5/6 sm:text-2xl/[100%] lg:text-3xl/[100%] xl:w-full"
        >
            {{ $item['title'] }}
        </h3>
    </div>

    <p class="mt-auto pr-5 text-base/[120%] sm:p-0">
        {{ $item['descr'] }}
    </p>
</li>
