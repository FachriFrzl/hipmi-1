<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarController extends Controller
{

    public function index()
    {
    $daftar= Daftar::all();
    return view('admin.formdaftar.index', compact('daftar'));
    }

    public function create()
    {
        return view('admin.formdaftar.create');
    }
    
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
            return redirect()->route('admin.daftarform.index')->with(['success' => 'data berhasil disimpan!']);
        }else{
            return redirect()->route('admin.daftarform.index')->with(['error'   => 'data gagal disimpan']);
        }
    }

    public function edit($id)
    {   
        $daftar = Daftar::findOrfail($id);
        return view('admin.formdaftar.edit')->with('daftar', $daftar);
    }

    public function update($id, Request $request)
    { 
    
        $this->validate($request, [
            'nama_perusahaan'                       => 'required',
            'jenis_perusahaan'                      => 'required',
            'alamat_perusahaan'                     => 'required',
            'provinsi'                              => 'required',
            'kota'                                  => 'required',
            'kecamatan'                             => 'required',
            'kelurahan'                             => 'required',
            'no_telp'                               => 'required',
            'deskripsi_perusahaan'                  => 'required',
            'email_perusahaan'                      => 'required',
        ]);
        $daftar=Daftar::findOrfail($id);
        $daftar->update([
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
            return redirect()->route('admin.daftarform.index')->with(['success' => 'data berhasil disimpan!']);
        }else{
            return redirect()->route('admin.daftarform.index')->with(['error'   => 'data gagal disimpan']);
        }
    }
    public function destroy($id)
    {
        $daftar = Daftar::findOrFail($id);
        $daftar->delete();

        if($daftar){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
