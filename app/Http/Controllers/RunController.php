<?php

namespace App\Http\Controllers;

use App\Models\Run;
use Illuminate\Http\Request;

class RunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $run = Run::where('user_id',Session('id'))->get();
        dd($run);
        return $run;  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
    $run = New Run();
    $run ->user_id = Session('id');
    $run ->distance = $request->distance;
    $run ->time = $request->time;
    $run ->date = $request->date;
    $run ->hr = $request->hr;
   
    $run ->save();
    return redirect() ->intended(route('button.index'));

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Run $run)
    {
        $run = Run::where('user_id',Session('id'));
        return $run;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Run $run)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Run $run)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Run $run)
    {
        //
    }
}
