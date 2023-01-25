<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Motto;

class About extends Model
{
    protected $table = 'about';
    protected $fillable =[
        'gambar_about','visi_id','misi_id','motto_id','deskripsi','deskripsi_lanjutan',
    ];
    public function visi()
    {
        return $this->belongsTo(Visi::class);
    }
    public function misi()
    {
        return $this->belongsTo(Misi::class);
    }
    public function motto()
    {
        return $this->belongsTo(Motto::class);
    }
}