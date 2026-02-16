<div class="flex flex-col gap-5">
    <h3 class="text-xl">
        {{ __('footer.navigation.stomatology.title') }}
    </h3>
    <ul class="flex flex-col gap-2.5 text-base/[120%]">
        @foreach (__('footer.navigation.stomatology.list') as $key => $item)
            <li
                class="flex items-start transition-colors duration-200 hover:text-light-brown"
            >
                <a href="{{ $item['url'] }}">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
