<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = "Genres";

    protected $primaryKey = 'id';
    protected $fillable = [
        "name_genres"
    ];

    public function books()
    {
        return $this->hasMany(Books::class, 'genre_id');
    }
}
