<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actior extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
    public function actiorPhotos()
    {
        return $this->hasMany(actiorPhoto::class);
    }
}
