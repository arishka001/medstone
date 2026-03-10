@props([
    'title',
])

<div class="container flex flex-col gap-5">
    <x-common.breadscrumbs />
    <x-typography.main-header>
        {!! $title !!}
    </x-typography.main-header>
</div>
