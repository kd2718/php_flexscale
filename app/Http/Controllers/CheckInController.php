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

    /*
    public function create()
    {
        //
    }
    */

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
           'weight'=>['required','integer', 'between:50,1000']
        ]);

        auth()->user()->profile->checkIns()->create([
            'weight'=>$data['weight']
        ]);

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
        $this->authorize('view', $checkIn);
        return view('checkIn.show', compact('checkIn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        $this->authorize('update', $checkIn);
        return view('checkIn.edit', compact('checkIn'));
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
        $this->authorize('update', $checkIn);

         $data = $request->validate([
           'weight'=>['required','integer', 'between:50,1000'],
           'created_at'=>['required', 'date', 'before:tomorrow', 'date_format:Y-m-d'],
           'time_at'=>['required', 'date_format:H:i']
        ]);


        $created_at = date('Y-m-d H:i:00', strtotime($data['created_at'] . ' ' . $data['time_at']));

        $checkIn->update([
            'weight'=>$data['weight'],
            'created_at'=>$created_at
        ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckIn $checkIn)
    {
        $this->authorize('delete', $checkIn);
        $checkIn->delete();
        return redirect('/home');
    }
}
