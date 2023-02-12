<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $fillable = ['from_date', 'to_date', 'number_of_adults', 'number_of_kids', 'full_price', 'apartment_id', 'user_id'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
