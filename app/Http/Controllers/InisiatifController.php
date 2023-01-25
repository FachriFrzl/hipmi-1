<?php

namespace App\Http\Controllers;

use App\Models\Inisiatif;
use Illuminate\Http\Request;

class InisiatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inisiatif = Inisiatif::all();
        return view('front.pages.initiative');
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
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function show(Inisiatif $inisiatif)
    {
        $inisiatif = Inisiatif::all();   
        return view('front.pages.ini', [
            'story',
            'slug'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Inisiatif $inisiatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inisiatif $inisiatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inisiatif $inisiatif)
    {
        //
    }
}
