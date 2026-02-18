<ul class="grid grid-cols-1 gap-2.5">
    @foreach(__('pages/' . $page . '.services-segments.segments-list') as $key => $item)
        <x-common.services.segments.card :page="$page" :item="$item" :key="$key"/>
    @endforeach

<x-common.services.segments.card-installment />
</ul>
