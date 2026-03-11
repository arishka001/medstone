<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($service)
    {
        $title = __('pages/' . $service . '.meta.title');
        $description = __('pages/' . $service . '.meta.description');

        return view('pages.services.' . $service, compact('service','title','description'));
    }

    public function subservice($subservice, $service)
    {
        $segments = __('pages/' . $service . '.services-segments.segments-list');
        $segment = collect($segments)->first(fn($item) => $item['slug'] === $subservice);
        abort_if(!$segment, 404);

        return view('pages.subservice', [
            'service' => $service,
            'subservice' => $subservice,
            'segment' => $segment,
            'title' => $segment['title'] . ' — MEDSTONE',
            'description' => $segment['descr'],
        ]);
    }
}
