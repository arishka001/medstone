<label
    {{ $attributes->merge(['class' => 'ml-1.5 flex w-5/6 cursor-pointer items-center gap-2 sm:w-full text-sm/[100%] text-light-gray']) }}
>
    <input
        type="checkbox"
        name="agree"
        class="cursor-pointer accent-basic-brown"
    />
    <span class="">
        {{ __('pages/blog.blog-page.btn-attribute.agree') }}
    </span>
</label>
