<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';
    protected $fillable = [
        'nama', 'slug', 'deskripsi', 'judul', 'negara', 'image',
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Story
    {
        return Story::make(
            get: fn ($value) => asset('/storage/story/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
