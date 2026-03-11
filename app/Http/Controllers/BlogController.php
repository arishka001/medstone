<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($article)
    {
        $blogs = __('pages/blog.list-blogs');
        $item = collect($blogs)->first(fn($d) => $d['slug'] === $article);
        abort_if(!$item, 404);

        return view('pages.blog-page', [
            'article' => $article,
            'item' => $item,
            'title' => $item['name'] . ' — MEDSTONE',
            'description' => $item['descr'],
        ]);
    }
}
