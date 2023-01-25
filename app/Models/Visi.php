<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\About;

class Visi extends Model
{
    protected $table = 'visi';
    protected $fillable = [
            'visi','gambar'
        ];
    public function About()
    {
        return $this->hasMany(About::class);
    }

    protected function gambar(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/visi/' . $value),
        );
    }
}
