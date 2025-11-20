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
        'quantity',
        'total_amount',
        'booking_date',
        'booking_time',
    ];

    protected $casts = [
        'booking_date' => 'date',
    ];

    // 🔹 Relasi ke user (customer)
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // 🔹 Relasi ke paket tour
    public function tour()
    {
        return $this->belongsTo(PackageTour::class, 'package_tour_id');
    }

    // 🔹 Relasi ke catering
    public function catering()
    {
        return $this->belongsTo(Catering::class, 'catering_id');
    }

    // 🔹 Relasi ke decoration
    public function decoration()
    {
        return $this->belongsTo(Decoration::class, 'decoration_id');
    }

    // 🔹 Relasi ke photography
    public function photograph()
    {
        return $this->belongsTo(Photography::class, 'photographie_id');
    }

    // 🔹 Relasi ke MC
    public function mc()
    {
        return $this->belongsTo(MC::class, 'mc_id'); // relasi ke tabel m_c_s
    }

    // 🔹 Relasi ke entertainment
    public function entertainment()
    {
        return $this->belongsTo(Entertainment::class, 'entertainment_id');
    }

    // 🔹 Relasi ke MUA
    public function mua()
    {
        return $this->belongsTo(MUA::class, 'mua_id'); // relasi ke tabel m_u_a_s
    }

}
