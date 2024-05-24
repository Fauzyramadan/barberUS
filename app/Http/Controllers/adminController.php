<?php

namespace App\Http\Controllers;

use App\Models\Jadwals;
use Illuminate\Http\Request;
use app\Models\User;

class adminController extends Controller
{
    //

    public function count(Request $request)
    {
        $totalUsers = User::where('isadmin', 0)->count();
        $totalOrder = Jadwals::count();
        return view('admin', compact('totalUsers', 'totalOrder'));
    }
}
