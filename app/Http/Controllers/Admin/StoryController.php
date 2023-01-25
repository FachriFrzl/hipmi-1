<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::all();
        return view('admin.story.index', compact('story'));
    }

    public function create()
    {
        return view('admin.story.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'nama'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/story', $image->hashName());
 
        //save to DB
        $story = Story::create([
            'image'             => $image->hashName(),
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'slug'              => Str::slug($request->name, '-'),
            'judul'             => $request->judul,
            'negara'            => $request->negara,
        ]);
 
        if($story){
             //redirect dengan pesan sukses
             return redirect()->route('admin.story.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.story.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    public function edit($id)
    {
        $story = Story::findOrfail($id);
        return view('admin.story.edit', compact('story'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $story = Story::findOrfail($id);
            $story->update([
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'judul'                => $request->judul,
                'negara'               => $request->negara,
            ]);

        } else {
            $story = Story::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/story/'.basename($story->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/story', $image->hashName());

            //update dengan image baru
            $story = Story::findOrfail($id);
            $story->update([
                'image'                => $image->hashName(),
                'nama'                 => $request->nama,
                'slug'                 => Str::slug($request->name, '-'),
                'deskripsi'            => $request->deskripsi,
                'judul'                => $request->judul,
                'negara'               => $request->negara,
            ]);
        }

        if($story){
            //redirect dengan pesan sukses
            return redirect()->route('admin.story.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.story.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id){
    $story = Story::findOrfail($id);
        Storage::disk('local')->delete('public/story/'.basename($story->image));
        $story->delete();

        if($story){
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
