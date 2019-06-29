<?php

namespace App\Http\Controllers;

use App\CheckIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CheckInController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // make a new thing
        $data = $request->validate([
           'weight'=>'require|integer|between:50,1000'
        ]);

        auth()->user()->profile->checkIns()->create(['weight'=>123]);

        return redirect("/home");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show(CheckIn $checkIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckIn $checkIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckIn $checkIn)
    {
        //
    }
}
