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
            $table->foreignId('catering_id')->constrained()->onDelete('cascade');
            $table->foreignId('decoration_id')->constrained()->onDelete('cascade');
            $table->foreignId('photographie_id')->constrained()->onDelete('cascade');
            $table->foreignId('mc_id')->constrained("m_c_s")->onDelete('cascade');
            $table->foreignId('entertainment_id')->constrained()->onDelete('cascade');
            $table->foreignId('mua_id')->constrained('m_u_a_s')->onDelete('cascade');;
            $table->foreignId('venue_id')->nullable()->constrained()->onDelete('set null');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('total_amount');
            $table->unsignedBigInteger('sub_total');
            $table->date('start_date');
            $table->date('end_date');
            $table->softDeletes();
            $table->timestamps();
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
