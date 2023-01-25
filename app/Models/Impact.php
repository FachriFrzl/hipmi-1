<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'slug', 'deskripsi', 'judul', 'negara', 'image',
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Impact
    {
        return Impact::make(
            get: fn ($value) => asset('/storage/story/' . $value),
        );
    }

    /**
     * createdAt
     *
     * @return Attribute
     */
    protected function createdAt(): Impact
    {
        return Impact::make(
            get: fn ($value) => Impact::parse($value)->format('d-M-Y'),
        );
    }

    /**
     * updatedAt
     *
     * @return Attribute
     */
    protected function updatedAt(): Impact
    {
        return Impact::make(
            get: fn ($value) => Impact::parse($value)->format('d-M-Y'),
        );
    }

    public function getRouteKeyName()

    {

        return 'slug';

    }
}
