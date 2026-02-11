<footer>
    <x-footer.form.section-form />

    <div class="container flex flex-col gap-10 lg:gap-15">
        <x-footer.contacts />

        <x-footer.map />

        <div class="flex flex-col gap-5 lg:gap-10">
            <div class="flex flex-col gap-10 lg:flex-row lg:gap-24">
                <x-common.logo class="w-40 xl:w-50" />

                <x-footer.navigation.navigation />
            </div>

            <div class="h-px w-full bg-basic-gray"></div>

            <x-footer.addition />
        </div>
    </div>
</footer>
