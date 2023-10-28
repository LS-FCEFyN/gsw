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

Route::get('/test-db-connection', function () {
    try {
        $databases = DB::connection('mongodb')->getMongoClient()->listDatabases();
        return "MongoDB connection OK";
    } catch (\Exception $e) {
        return "MongoDB connection failed: " . $e->getMessage();
    }
});
