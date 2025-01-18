<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageBooking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'package_tour_id',
        'user_id',
        'catering_id',
        'decoration_id',
        'photographie_id',
        'mc_id',
        'entertainment_id',
        'mua_id',
        'venue_id',
        'quantity',
        'total_amount',
        'sub_total',
        'start_date',
        'end_date',
    ];

    protected $cast = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function customer(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function tour(){
        return $this->belongsTo(PackageTour::class, 'package_tour_id');
    }


    public function catering()
    {
        return $this->belongsTo(Catering::class, 'catering_id');
    }

    public function decoration()
    {
        return $this->belongsTo(Decoration::class, 'decoration_id');
    }

    public function photograph()
    {
        return $this->belongsTo(Photograph::class, 'photographie_id');
    }

    public function mc()
    {
        return $this->belongsTo(MC::class, 'm_cs_id'); // 'm_c_s' table
    }

    public function entertainment()
    {
        return $this->belongsTo(Entertainment::class, 'entertainment_id');
    }

    public function mua()
    {
        return $this->belongsTo(MUA::class, 'm_u_a_id'); // 'm_u_a_s' table
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
}



}
