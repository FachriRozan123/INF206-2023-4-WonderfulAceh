<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    protected $table = 'tempat_wisata';
    protected $fillable = ['nama_tempat', 'alamat', 'nama_pemilik', 'nomor_pemilik', 'kategori', 'deskripsi', 'image'];
}
