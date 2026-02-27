<section class="flex flex-col gap-5 sm:gap-10 lg:gap-15" id="works">
    <div
        class="container flex flex-col gap-10 sm:flex-row sm:justify-between sm:gap-0"
    >
        <x-typography.second-header
            kicker="{{ __('pages/works.mini-text') }}"
            title="{!!  __('pages/works.title.part1') !!}"
            accent="{!!  __('pages/works.title.part2') !!}"
        />

        <x-buttons.scroll-buttons />
    </div>

    <x-works.list />

    <div class="container flex items-center justify-center pt-5 sm:pt-0">
        <x-buttons.open-more-btn href-name="{{route('works')}}">
            {{ __('pages/works.btn-more-works') }}
        </x-buttons.open-more-btn>
    </div>
</section>
