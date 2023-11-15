<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadu extends Model
{
    use HasFactory;

    public function pengaduan(){
        return $this->hasOne(Pengaduan::class);
    }
}
