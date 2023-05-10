<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;
    protected $table = 'tour_guide';
    protected $fillable = ['nama', 'alamat', 'nomor_hp', 'nama_tempat_id', 'deskripsi', 'image'];
    public function tempatwisata()
    {
        return $this->hasOne(TempatWisata::class);
    }
}
