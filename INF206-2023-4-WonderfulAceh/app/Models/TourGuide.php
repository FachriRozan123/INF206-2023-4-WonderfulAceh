<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TempatWisata;
use App\Models\User;
class TourGuide extends Model
{
    use HasFactory;
    protected $table = 'tour_guide';
    protected $fillable = ['nama', 'alamat', 'nomor_hp', 'nama_tempat_id', 'deskripsi', 'image','user_id'];
    public function tempatwisata()
    {
        return $this->hasOne(TempatWisata::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
