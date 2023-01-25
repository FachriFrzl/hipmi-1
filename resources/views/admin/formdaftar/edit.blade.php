@extends('layouts.app', ['title' => 'Edit Data Pendaftar - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT DATA</h2>
            <hr class="mt-4">
            <form action="{{ route('admin.daftarform.update', $daftar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Nama Perusahaan</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="nama_perusahaan" value="{{$daftar -> nama_perusahaan}}" placeholder="Nama Kategori">
                        @error('nama_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div class="form-group">
                        <label class="text-gray-700" for="name">Jenis Usaha</label>
                        <select class="form-control" id="jenis_perusahaan" name="jenis_perusahaan">
                        <option>Pilih Jenis Usaha</option>
                        <option>Pertanian</option>
                        <option>Peternakan</option>
                        <option>Perikanan</option>
                        <option>Perdagangan</option>
                        <option>Perindustrian</option>
                        <option>Pertambangan</option>
                        <option>Bisnis Transportasi</option>
                        <option>Sektor Parawisata</option>
                        <option>Teknologi,Informasi dan Komunikasi</option>
                        <option>Sektor Jasa</option>
                        <option>Usaha Formal</option>
                        <option>Usaha Informal</option>    
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Alamat Lengkap</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="alamat_perusahaan" value="{{$daftar -> alamat_perusahaan}}" placeholder="Tulis Alamat Lengkap Perusahaan">
                        @error('alamat_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                <div class="form-group">
                    <select class="form-control" id="provinsi" name="provinsi">
                    <option>Pilih Provinsi</option>
                    <option>Jawa Barat</option>   
                    </select> 
                </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                <div class="form-group">
                    <select class="form-control" id="kota" name="kota">
                    <option>Pilih Kota</option>
                    <option>Cimahi</option>     
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-4">
                <div class="form-group">
                    <select class="form-control" id="kecamatan" name="kecamatan">
                    <option>Pilih Kecamatan</option>
                    <option>Cimahi Utara</option>
                    <option>Cimahi Tengah</option>
                    <option>Cimahi Selatan</option>
                    <option>Cibeunying Kaler</option>
                    <option>Cibeunying Kidul</option>
                    <option>Rancasari</option>
                    <option>Margahayu</option>
                    <option>Arjawinangun</option>
                    <option>Legok</option>    
                    </select> 
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-4">
                <diV class="form-group">
                    <select class="form-control" id="kelurahan" name="kelurahan">
                    <option>Pilih Kelurahan</option>
                    <option>Citereup</option>
                    <option>Cipageran</option>
                    <option>Cibabat</option>
                    <option>Pasirkaliki</option>
                    <option>Cimahi</option>
                    <option>Padasuka</option>
                    <option>Cigugur Tengah</option>
                    <option>Karang Mekar</option>
                    <option>Setiamanah</option>
                    <option>Baros</option>
                    <option>Cibeber</option>
                    <option>Leuwigajah</option>
                    <option>Utama</option>
                    <option>Melong</option>
                    <option>Cibereum</option>    
                    </select>
                </div>
            </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">No Telepon Penanggung Jawab</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="no_telp" value="{{$daftar -> no_telp}}" placeholder="Tulis no telepon perusahaan ....">
                        @error('no_telp')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Deskripsi Singkat Perusahaan</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="deskripsi_perusahaan" value="{{$daftar -> deskripsi_perusahaan}}" placeholder="Tulis deskripsi singkat perusahaan .....">
                        @error('deskripsi_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Email Perusahaan</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="email_perusahaan" value="{{$daftar -> email_perusahaan}}" placeholder="Silahkan tulis email perusahaan ....">
                        @error('email_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
                </div>
            </form>
        </div>
        
    </div>
</main>
@endsection