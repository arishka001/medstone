<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'pages.home' );
} )->name( 'home' );

Route::get( 'stomatology', function () {
    return view( 'pages/services.stomatology' );
} )->name( 'stomatology' );

Route::get( 'kids', function () {
    return view( 'pages/services.kids' );
} )->name( 'kids' );

Route::get( 'cosmetology', function () {
    return view( 'pages/services.cosmetology' );
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
    return view( 'pages/doctors.index' );
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

//Route::get('second-page',[\App\Http\Controllers\SecondController::class, 'second']);

require __DIR__ . '/settings.php';
