@props(['mailClass' => ''])

<div class="flex flex-col gap-2.5">
    <span
        class="{{ $mailClass }} text-sm leading-none text-light-gray sm:text-base"
    >
        {{ __('common/contacts.mail.name') }}
    </span>
    <a
        {{ $attributes->merge(['class' => 'text-xl leading-none']) }}
        href="mailto:{{ __('common/contacts.mail.mail') }}"
    >
        {{ __('common/contacts.mail.mail') }}
    </a>
</div>
