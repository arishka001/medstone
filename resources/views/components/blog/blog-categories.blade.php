@if (request()->routeIs('blog'))
    <div class="no-scrollbar flex gap-2.5 overflow-x-scroll pr-1.5">
        <button
            onclick="filterBlogs('all')"
            id="filter-all"
            class="blog-filter flex shrink-0 cursor-pointer items-center justify-center rounded-3xl border border-basic-brown bg-[#FBFBFB] px-5 py-3.75 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown"
        >
            {{ __('pages/blog.all-blogs') }}
        </button>

        @foreach (__('pages/blog.blogs-categories') as $key => $category)
            <button
                onclick="filterBlogs('{{ $key }}')"
                id="filter-{{ $key }}"
                class="blog-filter flex cursor-pointer items-center justify-center rounded-3xl border border-basic-brown bg-[#FBFBFB] px-5 py-3.75 text-base/[120%] text-nowrap transition-all duration-200 hover:border-extra-light-brown hover:text-extra-light-brown"
            >
                {{ $category['name'] }}
            </button>
        @endforeach
    </div>
@endif
