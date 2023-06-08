<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pozajmicas()
    {
        return $this->hasMany(Pozajmica::class);
    }
}