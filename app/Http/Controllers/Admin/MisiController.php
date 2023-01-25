<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Misi;
use Illuminate\Support\Facades\Storage;

class MisiController extends Controller
{
    public function index()
    {
            $misi = Misi::all();
            return view('admin.misi.index', compact('misi'));
        
    }
    public function create()
    {
        return view('admin.misi.create');
    }
    public function store(Request $request)
    {
       $this->validate($request, [
           'gambar_misi' => 'required|gambar_misi|mimes:jpeg,jpg,png|max:2000',
           'misi'  => 'required|unique:misi' 
       ]); 

       //upload gambar_misi
       $gambar_misi = $request->file('gambar_misi');
       $gambar_misi->storeAs('public/misi', $gambar_misi->hashName());

       //save to DB
       $misi = Misi::create([
           'gambar_misi'  => $gambar_misi->hashName(),
           'misi'   => $request->misi,
       ]);

       if($misi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.misi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.misi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        }
        public function edit(Misi $misi)
    {
        return view('admin.misi.edit', compact('misi'));
    }
    public function update(Request $request, Misi $misi)
    {
        $this->validate($request, [
            'misi'  => 'required|unique:misi,misi,'.$misi->id 
        ]); 

        //check jika gambar_misi kosong
        if($request->file('gambar_misi') == '') {
            
            //update data tanpa gambar_misi
            $misi = Misi::findOrFail($misi->id);
            $misi->update([
                'misi'   => $request->misi
            ]);

        } else {

            //hapus gambar_misi lama
            Storage::disk('local')->delete('public/misi/'.basename($misi->gambar_misi));

            //upload gambar_misi baru
            $gambar_misi = $request->file('gambar_misi');
            $gambar_misi->storeAs('public/misi', $gambar_misi->hashName());

            //update dengan gambar_misi baru
            $misi = Misi::findOrFail($misi->id);
            $misi->update([
                'gambar_misi'  => $gambar_misi->hashName(),
                'misi'   => $request->misi
         ]);
        }

        if($misi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.misi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.misi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $misi = Misi::findOrFail($id);
        Storage::disk('local')->delete('public/misi/'.basename($misi->gambar_misi));
        $misi->delete();

        if($misi){
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
