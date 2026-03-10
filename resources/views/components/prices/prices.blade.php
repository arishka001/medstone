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

        <div class="container flex justify-center">
            <x-buttons.callback-btn-dark
                onclick="openModal()"
                class="group w-full self-center sm:w-fit"
            >
                {{ __('pages/home.first-section.btns.consultation') }}
            </x-buttons.callback-btn-dark>
        </div>
    </div>
</section>
