<?php

namespace App\Http\Controllers;

use App\Models\Jadwals;
use App\Models\Tanggal;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    //
    public function index(): View
    {
        return view('order');
    }

    public function order(Request $request)
    {
        // dd($request);
        Jadwals::create([
            'name' => $request->name,
            'nohp' => $request->nohp,
            'confirmDate' => $request->confirmDate,
            'confirmJam' => $request->confirmJam,
            'confirmService' => $request->confirmService,
            'confirmPrice' => $request->confirmPrice,
        ]);
        Tanggal::where(['tanggal' => $request->confirmDate, 'jam' => $request->confirmJam,])
            ->update(['status' => 1]);
        return redirect()->route('dashboard')->with('success', 'Booking Diterima, Dapatkan pengalaman terbaik bersama kammi.');
    }
}
