@extends('layouts.app', ['title' => 'Detail - Admin'])
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">
<div class="m-4 inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
    <div class="card border-dark mb-3" style="max-width: 1120px;">
        <div class="card-header">ID -> {{ $svg -> id }}</div>
        <div class="card-body text-dark">
          <h5 class="card-title">Nama</h5>
          <p class="card-text">{{ $svg -> nama }}</p>
          <h5 class="card-title">Deskripsi</h5>
          <p class="card-text"><small>{{ $svg -> deskripsi }}</small></p>
        </div>
    </div>
</div>
<a href="{{route('admin.svg.index')}}"><span class="material-symbols-outlined">
    arrow_back
    </span></a>
    </div>
</main>
@endsection