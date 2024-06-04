<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about-us', [MainController::class, 'about_us'])->name('about');
Route::get('contact', [MainController::class, 'contact'])-> name('contact');
Route::get('model-saving', [MainController::class, 'model_saving'])-> name('model-saving');
Route::get('model-quary', [MainController::class, 'model_quary'])-> name('model-quary');


Route:: get('news-details/{id}', function($id){
    return 'This is news details page for id: '.$id;
})-> name('news');