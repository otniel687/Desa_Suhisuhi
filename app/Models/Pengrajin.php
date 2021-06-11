<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengrajin extends Model
{
    use HasFactory;
    protected $table = 'pengrajin';
    protected $fillable = ['id', 'nama', 'alamat', 'kontak', 'kerajinan', 'foto'];
    protected $primaryKey = 'id';
}
