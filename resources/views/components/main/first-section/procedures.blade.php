<ul class="hidden flex-wrap gap-1.25 sm:flex sm:w-4/5 lg:w-full">
    @foreach (__('pages/home.first-section.benefits') as $key => $item)
        <li
            class="rounded-3xl border border-b-basic-gray px-3.5 py-1.5 text-base text-nowrap"
        >
            {{ $item }}
        </li>
    @endforeach
</ul>
