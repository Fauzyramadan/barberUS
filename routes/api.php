<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KalenderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function () {
    Route::get('/kalender.index', [KalenderController::class, 'indexapi']);
    // Your routes here
});
// Route::get('kalender.index', [KalenderController::class, 'indexapi'])->middleware('auth');
// Route::get('anjing', function () {
//     return response()->json([
//         'nama' => "fdhsgyufs"
//     ]);
// });
