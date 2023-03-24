<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Connection to database established successfully.";
    } catch (\Exception $e) {
        die("Could not connect to the database: " . $e->getMessage());
    }
});
Route::get('/leave_system', function () {
    return view('leave_system');
});