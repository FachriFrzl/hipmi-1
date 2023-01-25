@extends('layouts.frontapp', ['title' => 'Daftar'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/ais_6.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">FORM PENDAFTARAN</h1>
        </div>
    </section>

<section>
    <div class="container mt-50 mb-70 m-30">
        <div class="row">
            <div class="col-sm-9">
                <h3 class="text-center fw-600">FORMULIR PENDAFTARAN</h3>
                <form action="{{ route('front.formdaftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>   
                        <label class="text-gray-700" for="name">Nama Perusahaan</label>
                        <input class="form-input w-full mt-2 rounded-md focus:bg-white" type="text" name="nama_perusahaan" value="{{old('nama_perusahaan')}}" placeholder="Tuliskan Nama Perusahaan ....">
                        @error('nama_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
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
                    <div class="form-group">
                        <label class="exampleFormContolSelect1">Alamat Perusahaan</label>
                        <input class="form-input w-full mt-2 rounded-md focus:bg-white" type="text" name="alamat_perusahaan" value="{{old('alamat_perusahaan')}}" placeholder="Alamat Perusahaan">
                    </div>    
                    <div class="form-group">
                        <select class="form-control" id="provinsi" name="provinsi">
                        <option>Pilih Provinsi</option>
                        <option>Jawa Barat</option>   
                        </select> 
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control" id="kota" name="kota">
                        <option>Pilih Kota</option>
                        <option>Cimahi</option>     
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="kecamatan" name="kecamatan">
                        <option>Pilih Kecamatan</option>
                        <option>Cimahi Utara</option>
                        <option>Cimahi Tengah</option>
                        <option>Cimahi Selatan</option>
                        <option>Cibeunyin Kaler</option>
                        <option>Cibeunying Kidul</option>
                        <option>Rancasari</option>
                        <option>Margahayu</option>
                        <option>Arjawinangun</option>
                        <option>Legok</option>    
                        </select> 
                    </div>
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
                    <div>   
                        <label class="text-gray-700" for="name">No Telepon Penanggung Jawab</label>
                        <input class="form-input w-full mt-2 rounded-md focus:bg-white" type="text" name="no_telp" value="{{old('no_telp')}}" placeholder="No telepon">
                        @error('deskripsi_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>   
                        <label class="text-gray-700" for="name">Deskripsi Singkat</label>
                        <input class="form-input w-full mt-2 rounded-md focus:bg-white" type="text" name="deskripsi_perusahaan" value="{{old('deskripsi_perusahaan')}}" placeholder="Tuliskan Deskripsi Singkat Perusahaan ....">
                        @error('deskripsi_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div>   
                        <label class="text-gray-700" for="name">Email</label>
                        <input class="form-input w-full mt-2 rounded-md focus:bg-white" type="email" name="email_perusahaan" value="{{old('email_perusahaan')}}" placeholder="Example Nama@gmail.com">
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
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">SIMPAN</button>
                </div>
            </form>
            </div>
    </div>
</section>
<br>
<br>
<br>
<script>
        @if(session()->has('success'))

        Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @elseif(session()->has('error'))

        Swal.fire({
            icon: 'error',
            text: 'GAGAL!',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @endif
    </script>
@endsection
