<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class TempatWisata extends Model
{
    use HasFactory;
    protected $table = 'tempat_wisata';
    protected $fillable = ['nama_tempat', 'alamat', 'nama_pemilik', 'nomor_pemilik', 'kategori', 'deskripsi', 'image'];
}
