<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "profile_guru";
    protected $fillable = ['user_id', 'niy', 'nomor_handphone', 'tempat_lahir', 'tanggal_lahir', 'status', 'jumlah_anak', 'nama_suami', 'nama_istri', 'tanggal_masuk', 'tanggal_keluar'];

}
