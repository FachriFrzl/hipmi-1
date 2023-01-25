<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inisiatif;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs';
    protected $fillable = [
        'nama','slug','deskripsi','inisiatif_id','image'
    ];

    protected function image(): Program
    {
        return Program::make(
            get: fn ($value) => asset('/storage/program/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }

    public function inisiatif()
    {
       return $this->belongsTo(Inisiatif::class);
    }
}
