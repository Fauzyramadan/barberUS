<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Jadwals;
use Termwind\Components\Dd;

class KalenderController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request)
    {
        $jadwals = Jadwals::select('name', 'nohp', 'confirmDate', 'confirmJam')->get();
        $events = $jadwals->map(function ($jadwal) {
            return [
                'name' => $jadwal->name,
                'nohp' => $jadwal->nohp,
                'Tanggal' => $jadwal->confirmDate,
                'Jam' => $jadwal->confirmJam,
                // Anda bisa menambahkan atribut lain seperti 'color' atau 'description'
            ];
        });
        // Cek apakah permintaan adalah AJAX untuk mendapatkan data dalam format JSON
        if ($request->ajax()) {
            return response()->json($events);
        }
        // dd($request);
        // Jika bukan AJAX, kembalikan view dengan data event
        return view('kalender.index', compact('events'));
    }
}
