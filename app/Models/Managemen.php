<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managemen extends Model
{
    protected $table = "users";
    protected $fillable = ["nama", "email", "password", "role", "status"];
}
