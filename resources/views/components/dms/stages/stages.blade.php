<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('pages/dms.section-stages.mini-text') }}"
            title="{!!  __('pages/dms.section-stages.title.part1') !!}"
            accent="{!!  __('pages/dms.section-stages.title.part2') !!}"
        />

        <ul class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 xl:grid-cols-4">
            @foreach (__('pages/dms.section-stages.list') as $key => $item)
                <x-dms.stages.card :item="$item" :loop="$loop" />
            @endforeach
        </ul>
    </div>
</section>
