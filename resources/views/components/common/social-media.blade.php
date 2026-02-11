@props(['linkClass' => ''])

<div
    {{
        $attributes->merge([
            'class' => 'flex gap-2.5',
        ])
    }}
>
    @foreach (__('common/contacts.social-media') as $key => $item)
        <a
            href="{{ $item['href'] }}"
            class="{{ $linkClass }} flex items-center justify-center"
        >
            <img
                src="{{ Vite::image('components/contacts/' . $item['src']) }}"
                alt="{{ $key }}"
                class="h-auto w-7 sm:w-7.5"
            />
        </a>
    @endforeach
</div>
