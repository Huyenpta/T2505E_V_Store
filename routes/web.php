<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return redirect()->route('store.index');
});

Route::resource('store', StoreController::class);
