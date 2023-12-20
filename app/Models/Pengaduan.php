<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [

        'tgl_pengaduan',
        'isi_pengaduan',
        'file_path',
        'isi_tanggapan',
        'nama',
        'no_ktp',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'alamat',
        'email',
        'no_hp',
        'id_validasi',
        'dinas_id',
        'id_status',
    ];


    public function statusValidasis(){
        return $this->belongsTo(StatusValidasi::class, 'id_validasi');
    }

    public function statusPengaduans(){
        return $this->belongsTo(StatusPengaduan::class, 'id_status');
    }

    public function dinas(){
        return $this->belongsTo(Dinas::class, 'dinas_id');
    }
}
