@props(['phoneClass' => ''])

<div class="flex flex-col gap-2.5">
    <span
        class="{{ $phoneClass }} text-sm leading-none text-light-gray sm:text-base"
    >
        {{ __('common/contacts.telephone.name') }}
    </span>
    <a
        href="tel:{{ __('common/contacts.telephone.short') }}"
        {{ $attributes->merge(['class' => 'text-xl leading-none']) }}
    >
        {{ __('common/contacts.telephone.full') }}
    </a>
</div>
