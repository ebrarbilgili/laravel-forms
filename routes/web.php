<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middleware' => 'web'])->group(function () {
    Route::resource('/posts', PostController::class);
});
