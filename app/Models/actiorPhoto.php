<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actiorPhoto extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function actiors()
    {
        return $this->belongsTo(Actior::class);
    }
}
