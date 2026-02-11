<div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 lg:grid-cols-4">
    @foreach (__('pages/blog.list-blogs') as $key => $item)
        <x-blog.card :item="$item" :loop="$loop" />
    @endforeach
</div>
