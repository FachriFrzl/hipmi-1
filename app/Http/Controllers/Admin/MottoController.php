<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motto;

class MottoController extends Controller
{
    public function index()
    {
        $motto = Motto::all();
        return view('admin.motto.index', compact('motto'));
    }
    public function create()
    {
        return view('admin.motto.create');
    }

    public function store(Request $request)
    {
       $this -> validate($request,
       [
        'motto' => 'required',
        'kota'  => 'required',
       ]);
    
    //save to db
    $motto = Motto::create([
        'motto' => $request -> motto,
        'kota'  => $request -> kota,
    ]);
    if($motto){
         //redirect dengan pesan sukses
         return redirect()->route('admin.motto.index')->with(['success' => 'Data Berhasil Disimpan!']);
     }else{
         //redirect dengan pesan error
         return redirect()->route('admin.motto.index')->with(['error' => 'Data Gagal Disimpan!']);
     }  
    }
    public function edit(Motto $motto)
    {
        return view('admin.motto.edit', compact('motto'));
    }
   public function update(Request $request, Motto $motto)
   {
        $this -> validate([
            'motto' => $request->motto,
             'kota' => $request->kota,
        ]);
        $motto = Motto::findOrFail($motto->id);
        $motto->update([
            'motto' => $request->motto,
            'kota'  => $request->kota,
        ]);
        if($motto){
            //redirect dengan pesan sukses
            return redirect()->route('admin.motto.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.motto.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $motto = Motto::findOrFail($id);
        $motto->delete();
        if($motto){
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
