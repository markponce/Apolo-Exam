<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Random::generate();
        return view('welcome');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function show(Random $random)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function edit(Random $random)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Random $random)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Random  $random
     * @return \Illuminate\Http\Response
     */
    public function destroy(Random $random)
    {
        //
    }
}
