<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{!!  __('pages/' . $page . '.services-segments.mini-text') !!}"
            title="{!!  __('pages/' . $page . '.services-segments.title.part1') !!}"
            accent="{!!   __('pages/' . $page . '.services-segments.title.part2')  !!}"
        />

        <x-common.services.segments.list :page="$page"/>
    </div>
</section>
