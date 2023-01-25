<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();
        return view('admin.member.index', compact('member'));
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'nama'  => 'required',
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/member', $image->hashName());
 
        //save to DB
        $member = Member::create([
            'image'             => $image->hashName(),
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'slug'              => Str::slug($request->name, '-'),
            'kondisi'             => $request->judul,
            'negara'            => $request->negara,
        ]);
 
        if($member){
             //redirect dengan pesan sukses
             return redirect()->route('admin.member.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.member.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }
}
