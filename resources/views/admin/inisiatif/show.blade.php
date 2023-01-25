@extends('layouts.app', ['title' => 'Detail - Admin'])
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">
<div class="m-4 inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
    <div class="card border-dark mb-3 px-100" style="max-width: 100%;">
        <nav class="bg-dark navbar-dark">
            <div class="container">
              <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Detail</a>
            </div>
            </nav>
          <section id="gallery">
            <div class="container justify-center">
              <div class="row justify-center">
              <div class="col-lg-9 mb-5 mt-5 px-10">
              <div class="card">
                <img src="{{asset('storage/inisiatif/'.$inisiatif->image)}}" alt="" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">ID -> {{$inisiatif -> id}}</h5>
                <hr>
                  <h5 class="card-title">Nama</h5>
                  <p>{{$inisiatif -> nama}}</p>
                  <hr>
                  <h5 class="card-title">Deskripsi</h5>
                  <p class="card-text"><small>{{$inisiatif -> deskripsi}}</small></p>
                  <hr>
                  <h5 class="card-title">Program</h5>
                  <p class="card-text">{{$inisiatif -> program}}</p>
                </div>
               </div>
              </div>
            
          </section>
          
    </div>
</div>
<a href="{{route('admin.inisiatif.index')}}"><span class="material-symbols-outlined">
    arrow_back
    </span></a>
    </div>
</main>
@endsection