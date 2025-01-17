<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fashion_styling_and_makeup extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'fashion_styling_and_makeup_name',
        'icon',
        'slug',
    ];

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }


}
