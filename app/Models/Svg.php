<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svg extends Model
{
    protected $table = 'svgs';
    protected $fillable = [
        'nilai','deskripsi','image'
    ];
    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Svg
    {
        return Svg::make(
            get: fn ($value) => asset('/storage/svg/' . $value),
        );
    }

}
