@props(['plusClass' => ''])

<button
    {{
        $attributes->merge([
            'class' => 'flex h-12.5 text-nowrap w-full cursor-pointer items-center justify-center rounded-3xl border border-basic-brown text-base/[100%] px-5 transition-all duration-200 hover:bg-basic-brown hover:text-white',
        ])
    }}
>
    <div class="flex items-center justify-center gap-2">
        <x-svg.plus
            class="{{ $plusClass }}bg-basic-brown text-light-white group-hover:text-basic-brown group-hover:bg-light-white"
        />

        {{ trim($slot) !== '' ? $slot : 'Записаться на прием' }}
    </div>
</button>
