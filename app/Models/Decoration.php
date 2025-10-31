<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decoration extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'decoration_name'
    ];

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }


}
