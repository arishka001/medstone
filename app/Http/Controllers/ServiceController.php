<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($service)
    {
        return view('pages.services.' . $service, compact('service'));
    }

    public function subservice($subservice, $service)
    {
        $segments = __('pages/' . $service . '.services-segments.segments-list');
        $segment = collect($segments)->first(fn($item) => $item['slug'] === $subservice);
        abort_if(!$segment, 404);

        return view('pages.subservice', compact('service', 'subservice', 'segment'));
    }
}
