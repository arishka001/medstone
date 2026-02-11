@props(['addressClass' => ''])

<div class="flex flex-col gap-2.5">
    <span
        class="{{ $addressClass }} text-sm leading-none text-light-gray sm:text-base"
    >
        {{ __('common/contacts.address.name') }}
    </span>
    <p
        {{
            $attributes->merge([
                'class' => 'text-xl leading-none',
            ])
        }}
    >
        {{ __('common/contacts.address.address') }}
    </p>
</div>
