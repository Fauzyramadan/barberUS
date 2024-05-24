<?php

namespace App\Http\Controllers;

use App\Models\Jadwals;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


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

        return redirect()->route('dashboard');
    }
}
