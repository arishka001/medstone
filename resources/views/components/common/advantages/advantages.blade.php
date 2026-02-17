<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('pages/home.section-advantages.mini-text') }}"
            title="{!!  __('pages/home.section-advantages.title.part1') !!}"
            accent="{!! __('pages/home.section-advantages.title.part2') !!}"
        />

        <ul class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 xl:grid-cols-4">
            @foreach (__('pages/home.section-advantages.list') as $key => $item)
                <x-common.advantages.card :item="$item" />
            @endforeach
        </ul>
    </div>
</section>
