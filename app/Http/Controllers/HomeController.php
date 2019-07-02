<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckIn;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$checkIns = auth()->user()->profile->checkIns;
        $checkIns = CheckIn::where('profile_id', auth()->user()->profile->id)->latest()->paginate(10);
        return view('home', compact('checkIns'));
    }
}
