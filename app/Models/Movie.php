<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function actiors()
    {
        return $this->belongsToMany(Actior::class);
    }
    public function moviephotos()
    {
        return $this->hasMany(MoviePhoto::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
