<section class="flex flex-col gap-10 lg:gap-15" id="gallery">
    <div class="container">
        <x-typography.second-header
            kicker="{{ __('pages/home.section-gallery.mini-text') }}"
            title="{!!  __('pages/home.section-gallery.title.part1') !!}"
            accent="{!!  __('pages/home.section-gallery.title.part2') !!}"
        />
    </div>

    <x-common.gallery.list />
</section>
