<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use Illuminate\Database\Events\TransactionRolledBack;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/kelas-bus', function () {
    return view('pages.kelas');
});

Route::get('/daftar-harga', [TicketController::class, 'index']);

Route::get('/pesan', [TransactionController::class, 'index']);
Route::post('/pesan', [TransactionController::class, 'store']);

Route::post('/pesan', [TransactionController::class, 'detail']);
