<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    //
    public function booking(Request $request)
    {
        $time = strtotime($request->tanggal);
        $newformat = date('Y-m-d', $time);

        $getboking = DB::table('tanggals')
            ->where('tanggal', '=', $newformat)->get();

        return view('booking', [
            'tanggal' => $getboking,
            'currentDate' => $newformat
        ]);
    }
}
