<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = ['id', 'nama', 'harga', 'kontak1', 'kontak2', 'gambar'];
    protected $primaryKey = 'id';
}
