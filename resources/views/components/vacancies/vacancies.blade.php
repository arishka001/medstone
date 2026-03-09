<div class="grid grid-cols-1 gap-2.5">
    @foreach (__('pages/vacancies.vacancies-list') as $key => $item)
        <x-vacancies.card :item="$item" :loop="$loop" />
    @endforeach
</div>
