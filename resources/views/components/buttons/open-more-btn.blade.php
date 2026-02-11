@props(['hrefName' => '#'])

<a
    href="{{ $hrefName }}"
    class="flex h-12.5 w-fit items-center justify-center self-center rounded-3xl bg-basic-brown px-8.5 text-base text-nowrap text-white sm:w-77.5 lg:w-82.5"
>
    {{ $slot->isEmpty() ? 'Подробнее' : $slot }}
</a>
