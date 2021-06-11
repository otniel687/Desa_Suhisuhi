<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis_ulos';
    protected $fillable = ['id', 'id_jenis', 'nama', 'deskripsi', 'harga', 'gambar'];
}
