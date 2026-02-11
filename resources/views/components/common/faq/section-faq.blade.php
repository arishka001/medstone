<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('common/faq.mini-text') }}"
            title="{{ __('common/faq.title.part1') }}"
            accent="{{ __('common/faq.title.part2') }}"
        />

        <div class="grid grid-cols-1 gap-2.5 xl:grid-cols-2">
            @foreach (__('common/faq.list') as $key => $item)
                <x-common.faq.card :item="$item" :loop="$loop" />
            @endforeach
        </div>
    </div>
</section>
