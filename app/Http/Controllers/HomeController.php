<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Unggulan;
use App\Models\Post;
use App\Models\Agenda;
use App\Models\Testimony;
use App\Models\Prestasi;
use App\Models\Formdaftar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller\Admin;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->take(3)->get();
        $posts = Post::latest()->take(4)->get();
        $formdaftars = Formdaftar::latest()->take(12)->get();
        $mainagendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->take(1)->get();
        $agendas = Agenda::oldest()->where('end_date', '>', Carbon::today())->take(4)->get();
        $unggulans = Unggulan::oldest()->take(8)->get();;
        $testimonies = Testimony::latest()->take(4)->get();;
        
        return view('front.frontpage.index', compact('sliders','unggulans','posts','mainagendas','agendas','formdaftars','testimonies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('front.frontpage.show', compact('post'));
    }
    public function showAgenda(Agenda $agenda)
    {
        return view('front.frontpage.show', compact('agenda'));
    }
    
}