@php
    $segmentUrl = route($page . '.subservice', ['subservice' => $item['slug']]);
@endphp

<li
    class="group flex w-full rounded-3xl bg-[#FBFBFB] p-5 transition-all duration-200 hover:shadow-custom lg:justify-between lg:gap-11.25 lg:p-7.5 xl:gap-13 2xl:gap-50"
>
    <div class="flex w-full flex-col gap-5 lg:flex-row lg:gap-10">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-0.75 lg:min-w-75">
                <a href="{{ $segmentUrl }}">
                    <h3 class="text-xl/[100%] sm:text-2xl/[100%]">
                        <span>{!! $item['title']['part1'] !!}</span>
                        <span>{!! $item['title']['part2'] !!}</span>
                    </h3>
                </a>
                <p
                    class="text-sm/[100%] text-nowrap text-extra-light-brown sm:text-base/[100%]"
                >
                    {{ $item['price'] }}
                </p>
            </div>

            <x-svg.arrow
                class="group-hover:bg-basic-brown group-hover:text-light-white lg:hidden"
            />
        </div>

        <div
            class="flex flex-col gap-1.25 sm:w-11/12 sm:flex-row sm:flex-wrap lg:w-full"
        >
            @foreach ($item['sublist'] as $segment)
                <a
                    href="{{ $segmentUrl . '#' . $segment['main']['anchor'] }}"
                    class="inline-flex h-fit items-center justify-center self-start rounded-xl bg-[#F6F6F6] px-3 py-1.5 text-base/[90%] text-extra-light-brown transition-colors duration-200 hover:bg-[#EDEDED]"
                >
                    <span>{!! $segment['main']['name'] !!}</span>
                </a>
            @endforeach
        </div>
    </div>

    <x-svg.arrow
        class="hidden group-hover:bg-basic-brown group-hover:text-light-white lg:flex lg:self-center"
    />
</li>
