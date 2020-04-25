<?php

namespace App\Http\Controllers;

use App\Thank;
use Illuminate\Http\Request;

class ThankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('thanks');
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
     * @param  \App\Thank  $thank
     * @return \Illuminate\Http\Response
     */
    public function show(Thank $thank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thank  $thank
     * @return \Illuminate\Http\Response
     */
    public function edit(Thank $thank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thank  $thank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thank $thank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thank  $thank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thank $thank)
    {
        //
    }
}
