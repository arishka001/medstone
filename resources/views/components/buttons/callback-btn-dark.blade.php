@props(['plusClass' => ''])

<button
    {{
        $attributes->merge([
            'class' => 'flex h-12.5 text-nowrap w-full cursor-pointer items-center justify-center rounded-3xl border border-basic-brown text-base/[100%] px-5 transition-all duration-200 bg-basic-brown text-light-white hover:bg-light-white hover:text-basic-brown',
        ])
    }}
>
    <div class="flex items-center justify-center gap-2">
        <x-svg.plus
            class="{{ $plusClass }} text-basic-brown bg-light-white group-hover:text-light-white group-hover:bg-basic-brown"
        />

        {{ trim($slot) !== '' ? $slot : 'Записаться на прием' }}
    </div>
</button>
