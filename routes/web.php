<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'pages.home' );
} )->name( 'home' );

$services = ['stomatology', 'cosmetology', 'kids'];

foreach ($services as $service) {
    Route::get($service, fn() => view('pages.services.' . $service, compact('service')))
         ->name($service);

    Route::get($service . '/{subservice}', function ($subservice) use ($service) {
        return view('pages.subservice', compact('service', 'subservice'));
    })->name($service . '.subservice');
}


Route::get( 'cosmetology', function () {
    return view( 'pages.services.cosmetology' );
} )->name( 'cosmetology' );

Route::get( 'dms', function () {
    return view( 'pages.dms' );
} )->name( 'dms' );

Route::get( 'about', function () {
    return view( 'pages.about' );
} )->name( 'about' );

Route::get( 'prices', function () {
    return view( 'pages.prices' );
} )->name( 'prices' );

Route::get( 'doctors', function () {
    return view( 'pages.doctors' );
} )->name( 'doctors' );

Route::get( 'contacts', function () {
    return view( 'pages.contacts' );
} )->name( 'contacts' );

Route::get( 'promotions', function () {
    return view( 'pages.promotions' );
} )->name( 'promotions' );

Route::get( 'blog', function () {
    return view( 'pages.blog' );
} )->name( 'blog' );

Route::get( 'reviews', function () {
    return view( 'pages.reviews' );
} )->name( 'reviews' );

Route::get( 'vacancies', function () {
    return view( 'pages.vacancies' );
} )->name( 'vacancies' );

Route::view('/{service}/{subservice}', 'pages.segments.subservice');

//Route::get('second-page',[\App\Http\Controllers\SecondController::class, 'second']);

require __DIR__ . '/settings.php';
