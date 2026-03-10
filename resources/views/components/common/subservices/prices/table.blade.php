<table class="w-full table-fixed border-collapse">
    <x-common.subservices.prices.prices-head />

    @if (! empty($segment['general-prices-list']))
        <tbody id="general" class="prices-body hidden">
            @foreach ($segment['general-prices-list'] as $price)
                <x-common.subservices.prices.row :price="$price" />
            @endforeach
        </tbody>
    @endif

    @foreach ($segment['sublist'] as $key => $sub)
        <tbody id="{{ $sub['main']['anchor'] }}" class="prices-body hidden">
            @foreach ($sub['prices'] as $price)
                <x-common.subservices.prices.row :price="$price" />
            @endforeach
        </tbody>
    @endforeach
</table>
