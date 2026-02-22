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
}
