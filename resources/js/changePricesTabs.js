export function changePricesTabs() {
    const tabs = document.querySelectorAll('.price-tab');

    if (!tabs.length) return;

    const hash = window.location.hash?.replace('#', '');

    if (hash) {
        const tabFromHash = document.getElementById('tab-' + hash);
        if (tabFromHash) {
            showPrices(hash);

            document.getElementById('price-tabs-section')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
            });

            setTimeout(() => {
                tabFromHash.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center',
                });
            }, 300);

            return;
        }
    }

    tabs[0].click();
}

window.showPrices = function (anchor) {
    document
        .querySelectorAll('.prices-body')
        .forEach((el) => el.classList.add('hidden'));

    document.getElementById(anchor)?.classList.remove('hidden');

    document.querySelectorAll('.price-tab').forEach((tab) => {
        tab.classList.remove(
            'border-extra-light-brown',
            'text-extra-light-brown',
        );
    });

    const activeTab = document.getElementById('tab-' + anchor);
    activeTab?.classList.add(
        'border-extra-light-brown',
        'text-extra-light-brown',
    );

    activeTab?.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center',
    });
};
