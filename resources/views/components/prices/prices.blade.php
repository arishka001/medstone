<section id="price-tabs-section">
    <div class="flex flex-col gap-10 lg:gap-15">
        <x-prices.tabs />

        <div class="container">
            @foreach (__('pages/prices.categories') as $key => $category)
                <div id="{{ $key }}" class="prices-body hidden">
                    <x-prices.table :prices="$category['prices']" />
                </div>
            @endforeach
        </div>
    </div>
</section>
