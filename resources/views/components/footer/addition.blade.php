<div
    class="flex flex-col gap-5 pb-5 text-start text-sm text-light-gray sm:flex-row sm:justify-between sm:gap-0 lg:pb-10"
>
    <div class="flex flex-col gap-0.5 lg:flex-row lg:gap-9.5 2xl:gap-42.5">
        @foreach (__('footer.dop.block-1') as $key => $item)
            <a href="">
                {{ $item }}
            </a>
        @endforeach
    </div>

    <div class="flex flex-col gap-0.5 lg:hidden">
        @foreach (__('footer.dop.block-2') as $key => $item)
            <a href="">
                {{ $item }}
            </a>
        @endforeach
    </div>

    <div class="flex items-end justify-between sm:items-start">
        <a>
            {{ __('footer.dop.website-dev') }}
        </a>
        <x-svg.arrow
            aria-label="Вернуться к началу страницы"
            class="scroll-to-top -rotate-90 rounded-xl sm:hidden"
        />
    </div>
</div>
