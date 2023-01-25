<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;



class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('admin.about.index', ['about' => $about]);
    }
    public function tentangkami()
    {
        $about = About::with('Visi','Misi','Motto')->get();
        return view('front.pages.tentang-kami', ['about' => $about]);
    }
    public function create()
    {

        return view('admin.about.create');
    }
    public function edit(About $about)
    {
    return view('admin.about.edit', compact('about'));
    }
    public function update(Request $request, About $about)
    {
        //check jika gambar_misi kosong
        if($request->file('gambar_about') == '') {
            
            //update data tanpa gambar_misi
            $about = About::findOrFail($about->id);
            $about->update([
                'visi_id'              => $request->visi_id,
                'misi_id'              => $request->misi_id,
                'motto_id'             => $request->motto_id,
                'deskripsi'            => $request->deskripsi,
                'deskripsi_lanjutan'   => $request->deskripsi_lanjutan,
            ]);

        } else {

            //hapus gambar_misi lama
            Storage::disk('local')->delete('public/about/'.basename($about->gambar_about));

            //upload gambar_misi baru
            $gambar_about = $request->file('gambar_about');
            $gambar_about->storeAs('public/about', $gambar_about->hashName());

            //update dengan gambar_misi baru
            $about = About::findOrFail($about->id);
            $about->update([
                'gambar_about'         => $gambar_about->hashName(),
                'visi_id'              => $request->visi_id,
                'misi_id'              => $request->misi_id,
                'motto_id'             => $request->motto_id,
                'deskripsi'            => $request->deskripsi,
                'deskripsi_lanjutan'   => $request->deskripsi_lanjutan,
         ]);
        }

        if($about){
            //redirect dengan pesan sukses
            return redirect()->route('admin.about.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.about.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        Storage::disk('local')->delete('public/about/'.basename($about->gambar_about));
        $about->delete();

        if($about){
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
