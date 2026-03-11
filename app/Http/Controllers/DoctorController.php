<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show($doctor)
    {
        $doctors = __('pages/doctors.doctors-list');
        $item = collect($doctors)->first(fn($d) => $d['slug'] === $doctor);
        abort_if(!$item, 404);

        return view('pages.doctor-page', [
            'doctor' => $doctor,
            'item' => $item,
            'title' => $item['surname'] . ' ' . $item['name'] . ' — MEDSTONE',
            'description' => $item['descr'],
        ]);

    }
}
