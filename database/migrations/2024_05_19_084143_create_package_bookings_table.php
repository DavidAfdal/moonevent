<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->foreignId('package_tour_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('catering_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('decoration_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('photographie_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('mc_id')->nullable()->constrained("m_c_s")->onDelete('cascade');
            $table->foreignId('entertainment_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('mua_id')->nullable()->constrained('m_u_a_s')->onDelete('cascade');
            $table->unsignedBigInteger('total_amount');

            // ganti start_date & end_date dengan booking_date
            $table->date('booking_date'); 
            $table->time('booking_time'); // input jam acara

            $table->softDeletes();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_bookings');
    }
};
