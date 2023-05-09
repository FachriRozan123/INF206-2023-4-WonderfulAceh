<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
class TempatWisata extends Model
{
    use HasFactory;
    protected $table = 'tempat_wisata';
    protected $fillable = ['nama_tempat', 'alamat', 'nama_pemilik','category_id' ,'nomor_pemilik', 'deskripsi', 'image'];
    /**
     * Get the user associated with the TempatWisata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
