<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftars';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_perusahaan','jenis_perusahaan','alamat_perusahaan','provinsi',
        'kota','kecamatan','kelurahan','no_telp','deskripsi_perusahaan','email_perusahaan'
    ];
}
