<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = "profile_wali";
    protected $fillable = ['user_id', 'nama', 'pekerjaan', 'penghasilan', 'status', 'jumlah_anak', 'siswa_id', 'alamat'];
}
