<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use Illuminate\Http\Request;

class ImpactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impact = Impact::all();

        return view('front.pages.impact', compact(

            'impact'

            )

        );
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
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function show(Impact $story)
    {
        $story = Impact::all();
        return view('front.pages.singleimpact', [
    
          'impact' => $story,
          'nama' => $story->nama,
          'deskripsi' => $story->deskripsi,
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function edit(Impact $impact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impact $impact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impact $impact)
    {
        //
    }
}
