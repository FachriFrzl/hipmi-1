<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visi;
use Illuminate\Support\Facades\Storage;

class VisiController extends Controller
{
    public function index()
    {
            $visi = Visi::all();
            return view('admin.visi.index', compact('visi'));
        
    }
    public function create()
    {
        return view('admin.visi.create');
    }
    public function store(Request $request)
    {
       $this->validate($request, [
           'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2000',
           'visi'  => 'required|unique:visi' 
       ]); 

       //upload image
       $gambar = $request->file('gambar');
       $gambar->storeAs('public/visi', $gambar->hashName());

       //save to DB
       $visi = Visi::create([
           'gambar'  => $gambar->hashName(),
           'visi'   => $request->visi,
       ]);

       if($visi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.visi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.visi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit(Visi $visi)
    {
        return view('admin.visi.edit', compact('visi'));
    }
    public function update(Request $request, Visi $visi)
    {
        $this->validate($request, [
            'visi'  => 'required|unique:visi,visi,'.$visi->id 
        ]); 

        //check jika gambar kosong
        if($request->file('gambar') == '') {
            
            //update data tanpa gambar
            $visi = Visi::findOrFail($visi->id);
            $visi->update([
                'visi'   => $request->visi
            ]);

        } else {

            //hapus gambar lama
            Storage::disk('local')->delete('public/visi/'.basename($visi->gambar));

            //upload gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/visi', $gambar->hashName());

            //update dengan gambar baru
            $visi = Visi::findOrFail($visi->id);
            $visi->update([
                'gambar'  => $gambar->hashName(),
                'visi'   => $request->visi
         ]);
        }

        if($visi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.visi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.visi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $visi = Visi::findOrFail($id);
        Storage::disk('local')->delete('public/visi/'.basename($visi->gambar));
        $visi->delete();

        if($visi){
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
