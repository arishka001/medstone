@props(['hoursClass' => ''])

<div class="flex flex-col gap-2.5">
    <span
        class="{{ $hoursClass }} text-sm leading-none text-light-gray sm:text-base"
    >
        {{ __('common/contacts.work-schedule.text') }}
    </span>
    <span
        {{
            $attributes->merge([
                'class' => 'text-base leading-none',
            ])
        }}
    >
        {{ __('common/contacts.work-schedule.work') }}
    </span>
</div>
