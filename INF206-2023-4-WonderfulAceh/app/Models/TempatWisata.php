<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\TempatWisata;
use App\Models\User;
class TempatWisata extends Model
{
    use HasFactory;
    protected $table = 'tempat_wisata';
    protected $fillable = ['slug','nama_tempat', 'alamat', 'nama_pemilik','category_id' ,'nomor_pemilik', 'deskripsi', 'image', 'user_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tourguide()
    {
        return $this->belongsTo(TourGuide::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
