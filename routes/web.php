<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderBoard;

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


Route::get('/LeaderBoard', [LeaderBoard::class, 'getLeaderBoard']);
Route::post('/LeaderBoard', [LeaderBoard::class, 'postLeaderBoard']);