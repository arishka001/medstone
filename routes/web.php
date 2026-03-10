<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('dms', 'pages.dms')->name('dms');
Route::view('about', 'pages.about')->name('about');
Route::view('prices', 'pages.prices')->name('prices');
Route::view('doctors', 'pages.doctors')->name('doctors');
Route::view('contacts', 'pages.contacts')->name('contacts');
Route::view('promotions', 'pages.promotions')->name('promotions');
Route::view('blog', 'pages.blog')->name('blog');
Route::view('works', 'pages.works')->name('works');
Route::view('vacancies', 'pages.vacancies')->name('vacancies');
Route::view('thanks', 'pages.thanks')->name('thanks');

Route::get('doctors/{doctor}', [DoctorController::class, 'show'])->name('doctor');
Route::get('blog/{article}', [BlogController::class, 'show'])->name('article');

foreach (['stomatology', 'cosmetology', 'kids'] as $service) {
    Route::get($service, [ServiceController::class, 'show'])->defaults('service', $service)->name($service);
    Route::get($service . '/{subservice}', [ServiceController::class, 'subservice'])->defaults('service', $service)->name($service . '.subservice');
}

require __DIR__ . '/settings.php';
