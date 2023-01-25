<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.formdaftar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daftar = Daftar::create([
            'nama_perusahaan'           => $request -> nama_perusahaan,
            'jenis_perusahaan'          => $request -> jenis_perusahaan,
            'alamat_perusahaan'         => $request -> alamat_perusahaan,
            'provinsi'                  => $request -> provinsi,
            'kota'                      => $request -> kota,
            'kecamatan'                 => $request -> kecamatan,
            'kelurahan'                 => $request -> kelurahan,
            'no_telp'                   => $request -> no_telp,
            'deskripsi_perusahaan'      => $request -> deskripsi_perusahaan,
            'email_perusahaan'          => $request -> email_perusahaan
        ]);
        if($daftar)
        {
            return redirect()->route('front.formdaftar.index')->with(['success' => 'data berhasil disimpan!']);
        }else{
            return redirect()->route('front.formdaftar.index')->with(['error'   => 'data gagal disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        return view('admin.formdaftar.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        //
    }
}
