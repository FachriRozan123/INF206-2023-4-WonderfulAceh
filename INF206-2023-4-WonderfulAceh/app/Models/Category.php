<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TempatWisata;
class Category extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     protected $table = 'category';
    public function tempatwisata()
    {
        return $this->hasOne(TempatWisata::class);
    }
}
