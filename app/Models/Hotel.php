<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
        'name', 'address', 'supplier', 'status'
    ];

    public function hotels_reviews()
    {
        return $this->hasMany(HotelReview::class);
    }
}
