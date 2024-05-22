<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    //
    public function index()
    {
        return view('order');
    }

    public function order(Request $request)
    {
        Jadwal::create([
            'name' => $request->Auth::user('name'),
            'nohp' => $request->Auth::user('nohp'),
            'confirmDate' => $request->tanggal,
            'confirmJam' => $request->jam,
            'confirmService' => $request->service,
            'confirmPrice' => $request->price,
        ]);

        return request()->all();
    }
}
