<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', // tambahkan 'nama' di sini
        'no_ktp',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'alamat',
        'email',
        'no_hp',
    ];

    public function pengaduan(){
        return $this->hasOne(Pengaduan::class, 'id');
    }
}
