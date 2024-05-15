<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Tanggal;
use Carbon\Carbon;
use DateTime;
use DateTimeImmutable;

class AppointmentController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //render view 
        return view('appointment.index');
    }

    public function store(Request $request)
    {
        $time = strtotime($request->tanggal);
        $newformat = date('Y-m-d', $time);
        // dd($request);
        // dd(var_dump($newformat['mon'] . "/" . $newformat["mday"] . "/" . $newformat["year"]));
        $tanggal = Tanggal::create([
            'tanggal' => $newformat,
            'jam' => json_encode($request->jam,)
        ]);

        return redirect()->route('appointment.index');
    }
}
