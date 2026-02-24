<div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 lg:grid-cols-4">
    @foreach (__('pages/doctors.doctors-list') as $key => $item)
        <x-doctors.card :item="$item" :loop="$loop" />
    @endforeach

    @if (! request()->routeIs('doctors'))
        <x-doctors.vacancy-card />
    @endif
</div>
