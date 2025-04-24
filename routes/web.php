<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return '✅ Connected to database!';
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }
});
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
