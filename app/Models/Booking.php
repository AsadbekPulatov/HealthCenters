<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function service(){
        return $this->belongsTo(Services::class, 'service_id', 'id');
    }

    public function comments(){
        return $this->hasMany(Rating::class, 'booking_id', 'id');
    }
}
