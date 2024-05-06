<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health_Center extends Model
{
    use HasFactory;

    protected $table = 'health_centers';
    protected $fillable = ['name', 'description', 'address', 'phone', 'image', 'working_time'];

    public function services()
    {
        return $this->hasMany(Services::class, 'health_centers_id', 'id');
    }

    public function comments(){
        return $this->hasMany(Rating::class, 'heath_center_id', 'id');
    }
}
