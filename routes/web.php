<?php

use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/recommendation', [RecommendationController::class, 'showForm'])->name('recommendation.form')->middleware('auth');
Route::post('/recommendation', [RecommendationController::class, 'processForm'])->name('recommendation.process')->middleware('auth');
Route::get('/recommendation/history', [RecommendationController::class, 'showHistory'])->name('recommendation.history')->middleware('auth');
Route::get('/majors', [MajorController::class, 'index'])->name('majors.index');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('home');