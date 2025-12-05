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
            $table->string("status")->default('pending');
            $table->string('couple_name')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->foreignId('package_tour_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('catering_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('decoration_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('photographie_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('mc_id')->nullable()->constrained("m_c_s")->onDelete('set null');
            $table->foreignId('entertainment_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('mua_id')->nullable()->constrained('m_u_a_s')->onDelete('set null');
            $table->unsignedBigInteger('total_amount');

            // ganti start_date & end_date dengan booking_date
            $table->date('booking_date'); 
            $table->string('booking_time', 50);

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
