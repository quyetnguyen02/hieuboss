<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('home');




Route::get('/debug', function () {
    return [
        'database' => DB::connection()->getDatabaseName(),
        'host' => config('database.connections.mysql.host'),
        'session_driver' => config('session.driver'),
        'has_table' => Schema::hasTable('sessions'),
    ];
});
