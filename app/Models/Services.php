<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['health_centers_id', 'name', 'price', 'image', 'description'];

    public function health_services()
    {
        return $this->belongsTo(Health_Center::class, 'health_centers_id', 'id');
    }
}
