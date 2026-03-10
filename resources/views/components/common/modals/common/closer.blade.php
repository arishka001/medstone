<button
    onclick="closeModal({{ $id }})"
    {{ $attributes->merge(['class' => 'absolute top-5 right-5 cursor-pointer text-light-gray transition-colors hover:text-basic-brown']) }}
>
    <x-svg.closer class="size-8" />
</button>
