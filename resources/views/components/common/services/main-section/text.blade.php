@props([
    'page',
    'title1' => null,
    'title2' => null,
    'descr' => null,
])

@php
    $titlePart1 = $title1 ?? __('pages/' . $page . '.main-section.title.part1');
    $titlePart2 = $title2 ?? __('pages/' . $page . '.main-section.title.part2');
    $resolvedDescr = $descr ?? __('pages/' . $page . '.main-section.descr');
@endphp

<div class="flex flex-col gap-5 sm:gap-3 lg:gap-5 xl:gap-7.5">
    <h1
        class="text-[42px]/[80%] font-normal sm:text-5xl/[80%] lg:text-6xl/[80%] xl:text-7xl/[80%]"
    >
        <span class="font-[PlayfairDisplay] italic">
            {!! $titlePart1 !!}
        </span>
        <br />
        {!! $titlePart2 !!}
    </h1>

    <p
        class="text-base/[120%] leading-none sm:w-11/12 sm:text-lg/[100%] lg:w-5/6 xl:w-full xl:text-xl/[100%]"
    >
        {!! $resolvedDescr !!}
    </p>
</div>
