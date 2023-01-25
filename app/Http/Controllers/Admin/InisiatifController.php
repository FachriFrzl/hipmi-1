<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inisiatif;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InisiatifController extends Controller
{
    public function index()
    {
        $inisiatif = Inisiatif::all();
        return view('admin.inisiatif.index', compact('inisiatif'));
    }

    public function create()
    {
        return view('admin.inisiatif.create');
    }

    public function show($id)
    {
        $inisiatif = Inisiatif::findOrfail($id);
        return view('admin.inisiatif.show', compact('inisiatif'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'nama'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/inisiatif', $image->hashName());
 
        //save to DB
        $inisiatif = Inisiatif::create([
            'image'             => $image->hashName(),
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'slug'              => Str::slug($request->name, '-'),
            'program'           => $request->program,
        ]);
 
        if($inisiatif){
             //redirect dengan pesan sukses
             return redirect()->route('admin.inisiatif.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.inisiatif.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    public function edit($id)
    {
        $inisiatif = Inisiatif::findOrfail($id);
        return view('admin.inisiatif.edit', compact('inisiatif'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $inisiatif = Inisiatif::findOrfail($id);
            $inisiatif->update([
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'program'                => $request->program,
            ]);

        } else {
            $inisiatif = inisiatif::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/inisiatif/'.basename($inisiatif->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/inisiatif', $image->hashName());

            //update dengan image baru
            $inisiatif = inisiatif::findOrfail($id);
            $inisiatif->update([
                'image'                => $image->hashName(),
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'program'              => $request->program,
            ]);
        }

        if($inisiatif){
            //redirect dengan pesan sukses
            return redirect()->route('admin.inisiatif.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.inisiatif.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $inisiatif = Inisiatif::findOrfail($id);
        Storage::disk('local')->delete('public/inisiatif/'.basename($inisiatif->image));
        $inisiatif->delete();

        if($inisiatif){
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
