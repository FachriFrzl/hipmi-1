<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Inisiatif;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function index()
    {
    $program = Program::with('Inisiatif')->get();
    return view('admin.program.index', compact('program'));
    }

    public function create()
    {
        $inisiatif = Inisiatif::all();
        return view('admin.program.create', compact('inisiatif'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'nama'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/program', $image->hashName());
 
        //save to DB
        $program = Program::create([
            'image'             => $image->hashName(),
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'slug'              => Str::slug($request->name, '-'),
            'inisiatif_id'      => $request->inisiatif_id,
        ]);
 
        if($program){
             //redirect dengan pesan sukses
             return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.program.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    public function edit($id)
    {
        $program    = Program::findOrfail($id);
        $inisiatif  = Inisiatif::all();
        return view('admin.program.edit', compact('program','inisiatif'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $program = Program::findOrfail($id);
            $program->update([
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'inisiatif_id'                => $request->inisiatif_id,
            ]);

        } else {
            $program = Program::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/program/'.basename($program->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/program', $image->hashName());

            //update dengan image baru
            $program = Program::findOrfail($id);
            $program->update([
                'image'                => $image->hashName(),
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'inisiatif_id'         => $request->inisiatif_id,
            ]);
        }

        if($program){
            //redirect dengan pesan sukses
            return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.program.index')->with(['error' => 'Data Gagal Diupdate!']);
        } 
    }

    public function destroy($id)
    {
        $program = Program::findOrfail($id);
        Storage::disk('local')->delete('public/program/'.basename($program->image));
        $program->delete();

        if($program){
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
