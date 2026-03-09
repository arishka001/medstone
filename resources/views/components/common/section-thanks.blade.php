<section class="bg-light-white">
    <div class="container flex flex-col items-center gap-7.5 py-45 text-center">
        <h1
            class="text-[42px]/[80%] font-normal sm:text-5xl/[80%] lg:text-6xl/[80%] xl:text-7xl/[80%] 2xl:text-[82px]/[80%]"
        >
            <span class="font-[PlayfairDisplay] text-light-brown italic">
                {!! __('common/thanks.title.part1') !!}
            </span>
            <br />
            {!! __('common/thanks.title.part2') !!}
        </h1>

        <p
            class="text-base/[120%] sm:w-2/3 sm:text-xl/[120%] lg:w-1/2 2xl:w-1/3"
        >
            {!! __('common/thanks.text') !!}
        </p>

        <a href="{{ route('home') }}" class="">
            <x-buttons.callback-btn-dark class="sm:w-fit">
                {{ __('common/thanks.btn-back-home') }}
            </x-buttons.callback-btn-dark>
        </a>
    </div>
</section>
