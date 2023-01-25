@extends('layouts.app', ['title' => 'Edit About - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT ABOUT</h2>
            <hr class="mt-4">
            <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 mt-4">

                <div class="row">
                        <div class="col-sm-7">
                            <div>
                                <label class="text-gray-700" for="image">GAMBAR</label>
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="gambar_about">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{asset('storage/about/'.$about->gambar_about)}}" class="admin-edit-image">
                        </div>
                        
                    </div>

                    <div>
                        <label class="text-gray-700" for="name">Visi ID</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="visi_id" value="{{ old('visi_id', $about->visi_id) }}" placeholder="Visi ID">
                        @error('visi_id')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="text-gray-700" for="name">Misi ID</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="misi_id" value="{{ old('misi_id', $about->misi_id) }}" placeholder="Misi ID">
                    @error('misi_id')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>
            <div>
                <label class="text-gray-700" for="name">Moto ID</label>
                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="motto_id" value="{{ old('motto_id', $about->motto_id) }}" placeholder="Moto ID">
                @error('motto_id')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                @enderror
            </div>
        <div>
            <label class="text-gray-700" for="name">Deskripsi Awal</label>
            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="deskripsi" value="{{ $about -> deskripsi}}" placeholder="Deskripsi">
            @error('deskripsi')
                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                    <div class="px-4 py-2">
                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                    </div>
                </div>
            @enderror
        </div>
    <div>
        <label class="text-gray-700" for="name">Deskripsi Lanjutan</label>
        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="deskripsi_lanjutan" value="{{ old('deskripsi_lanjutan', $about->deskripsi_lanjutan) }}" placeholder="Deskripsi Lanjutan">
        @error('deskripsi_lanjutan')
            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                <div class="px-4 py-2">
                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                </div>
            </div>
        @enderror
    </div>

                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
                </div>
            </form>
    </div>
</div>
</main>
@endsection