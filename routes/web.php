<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('about-us', [MainController::class, 'about_us']);
Route::get('contact', [MainController::class, 'contact'])-> name('contact');

Route:: get('news-details/{id}', function($id){
    return 'This is news details page for id: '.$id;
})-> name('news');