<?php

namespace App\Http\Controllers;

use App\Models\User;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $customers = User::paginate(5);

        //render view with posts
        return view('customer.index', compact('customers'));
    }
}
