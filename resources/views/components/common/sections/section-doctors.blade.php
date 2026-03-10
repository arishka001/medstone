<section>
    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-typography.second-header
            kicker="{{ __('pages/doctors.mini-text') }}"
            title="{!!   __('pages/doctors.title.part1') !!}"
            accent="{!! __('pages/doctors.title.part2') !!}"
        />

        <x-doctors.list />

        <x-buttons.open-more-btn class="" href-name="{{route('doctors')}}">
            {{ __('pages/doctors.btn-more-doctors') }}
        </x-buttons.open-more-btn>
    </div>
</section>
