<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inisiatif extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'inisiatif';
    protected $fillable = [
        'nama','slug', 'program', 'deskripsi', 'image',
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Inisiatif
    {
        return Inisiatif::make(
            get: fn ($value) => asset('/storage/inisiatif/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }
}
