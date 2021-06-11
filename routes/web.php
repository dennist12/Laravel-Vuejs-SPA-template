<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

// laravel auth
Auth::routes(['register' => false, 'login' => false]);

Route::get('/{any?}', [AppController::class, 'app'])
    ->where('any', '.*');