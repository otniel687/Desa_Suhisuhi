<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'data_web';
    protected $fillable = ['id', 'nama', 'informasi', 'gambar'];
    protected $primaryKey = 'id';
}
