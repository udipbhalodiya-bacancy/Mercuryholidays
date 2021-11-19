<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelReview extends Model
{
    use HasFactory;

    protected $table = 'hotels_reviews';

    protected $fillable = [
        'hotel_id', 'title', 'description', 'rating', 'author'
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
