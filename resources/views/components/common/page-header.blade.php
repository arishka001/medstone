@props([
    'title',
])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-5']) }}>
    <x-common.breadscrumbs />
    <x-typography.main-header>
        {!! $title !!}
    </x-typography.main-header>
</div>
