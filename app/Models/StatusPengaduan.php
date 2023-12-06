<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengaduan extends Model
{
    public function pengaduans(){
        return $this->hasMany(Pengaduan::class, 'status_pengaduans');
    }
    use HasFactory;
}
