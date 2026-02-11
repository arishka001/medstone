<div class="hidden flex-col gap-5 lg:flex">
    <h3 class="text-xl">
        {{ __('footer.navigation.for-patients.title') }}
    </h3>
    <ul class="flex flex-col gap-2.5 text-base/[120%]">
        @foreach (__('footer.navigation.for-patients.list') as $key => $item)
            <li class="flex items-start">
                <a href="{{ $item['url'] }}">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
