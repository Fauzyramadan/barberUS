<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin', function () {
    $user_id = Auth::id();
    $user = DB::table('users')
        ->where('id', '=', $user_id)
        ->first();
    // dd($user);
    if ($user->isadmin === 1) {
        return view('admin');
    } else {
        return redirect()->route('dashboard');
    }
})->middleware('auth')->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/booking', function () {
    $tanggal =  date('Y-m-d');
    $date = DB::table('tanggals')
        ->where('tanggal', '=', $tanggal)
        ->get();
    // dd($date);
    return view('booking', [
        'tanggal' => $date
    ]);
})->middleware(['auth', 'verified'])->name('booking');

// Route::middleware(['auth'])->group(function () {
Route::post('/booking', [BookingController::class, 'booking'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('customer', \App\Http\Controllers\CustomerController::class);

Route::resource('appointment', \App\Http\Controllers\AppointmentController::class);

require __DIR__ . '/auth.php';
