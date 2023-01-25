<?php

namespace App\Http\Controllers\admin;

use App\Models\Svg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class SvgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $svg = Svg::all();

        return view('admin.svg.index', compact('svg'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.svg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'nama'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/svg', $image->hashName());
 
        //save to DB
        $svg = Svg::create([
            'image'             => $image->hashName(),
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
        ]);
 
        if($svg){
             //redirect dengan pesan sukses
             return redirect()->route('admin.svg.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.svg.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function show(Svg $svg)
    {
        $svg = Svg::findOrfail($svg->id);

        return view('admin.svg.show', compact('svg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $svg = Svg::findOrfail($id);
        return view('admin.svg.edit', compact('svg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $svg = Svg::findOrfail($id);
            $svg->update([
                'nama'                => $request->nama,
                'deskripsi'            => $request->deskripsi,
            ]);

        } else {
            $svg = Svg::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/svg/'.basename($svg->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/svg', $image->hashName());

            //update dengan image baru
            $svg = Svg::findOrfail($id);
            $svg->update([
                'image'                => $image->hashName(),
                'nama'                => $request->nama,
                'deskripsi'            => $request->deskripsi,
            ]);
        }

        if($svg){
            //redirect dengan pesan sukses
            return redirect()->route('admin.svg.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.svg.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $svg = Svg::findOrfail($id);
        Storage::disk('local')->delete('public/svg/'.basename($svg->image));
        $svg->delete();

        if($svg){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }   //
    }
}
