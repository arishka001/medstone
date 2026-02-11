<div
    @class([
        'flex flex-col gap-5 rounded-3xl bg-[#FBFBFB] p-2.5 sm:gap-8.75 xl:gap-5 xl:p-5',
        'hidden lg:flex' => $loop->index > 3,
    ])
>
    <div class="flex flex-col gap-5">
        <div
            class="relative flex h-57.5 w-full overflow-hidden rounded-3xl xl:size-68.75 2xl:size-85"
        >
            <img
                src="{{ vite::image('doctors/' . $item['img']) }}"
                alt=""
                class="h-full w-full object-cover object-top"
            />
            @if (! empty($item['main-doctor']))
                <div
                    class="absolute top-2.5 left-2.5 flex h-8 items-center justify-center rounded-xl bg-white px-4.5 text-base"
                >
                    {{ $item['main-doctor'] }}
                </div>
            @endif
        </div>

        <h3 class="w-5/6 text-xl/[100%] lg:w-full xl:text-2xl/[100%]">
            {{ $item['surname'] }}
            <br />
            {{ $item['name'] }}
        </h3>

        <div class="flex flex-col self-end text-base/[100%]">
            <div class="grid grid-cols-2 pb-2.5">
                <span class="text-light-gray">Должность:</span>
                <span class="pr-8 lg:pr-1">{!! $item['position'] !!}</span>
            </div>
            <div class="h-px w-full bg-[#E4E4E4]"></div>
            <div class="grid grid-cols-2 pt-2.5">
                <span class="text-light-gray">Стаж:</span>
                <span>{{ $item['experience'] }}</span>
            </div>
        </div>
    </div>

    <x-buttons.callback-btn class="mt-auto self-end" />
</div>
