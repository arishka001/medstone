@props([
    'prices',
])

<table class="w-full border-collapse">
    <x-common.prices-head />

    <tbody>
        @foreach ($prices as $price)
            <x-common.subservices.prices.row :price="$price" />
        @endforeach
    </tbody>
</table>
