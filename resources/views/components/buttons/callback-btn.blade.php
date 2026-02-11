@props(['plusClass' => ''])

<button
    {{
        $attributes->merge([
            'class' => 'flex h-12.5 text-nowrap w-full cursor-pointer items-center justify-center rounded-3xl border border-basic-brown text-base px-5',
        ])
    }}
>
    <div class="flex items-center justify-center gap-2">
        <x-svg.plus class="{{ $plusClass }}" />
        {{ trim($slot) !== '' ? $slot : 'Записаться на прием' }}
    </div>
</button>
