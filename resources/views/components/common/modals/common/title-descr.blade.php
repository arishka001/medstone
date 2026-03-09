@props([
    'title1',
    'title2' => null,
    'descr',
])

<div class="flex flex-col gap-5">
    <h2 class="text-3xl/[90%] sm:text-4xl/[90%]">
        {{ $title1 }}
        @if ($title2)
            <br />
            <span class="font-[PlayfairDisplay] text-light-brown italic">
                {!! $title2 !!}
            </span>
        @endif
    </h2>
    <p class="text-base/[120%] text-light-gray sm:w-4/5">
        {!! $descr !!}
    </p>
</div>
