<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "profile_siswa";
    protected $fillable = ["user_id", "nisn", "tempat_lahir","tanggal_lahir", "sekolah_asal", "nama_ayah", "nama_ibu", "nama_wali", "tahun_masuk", "tahun_keluar", "alasan_keluar", "status"];

    public function managemen()
    {
        return $this->belongsTo("\App\Models\Managemen");
    }
}
