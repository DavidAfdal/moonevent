<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request\StorePackageTourRequest;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('location');
            $table->longtext('event_crew')->nullable();
            $table->longtext('legal_services')->nullable();
            $table->longtext('general_information')->nullable();
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('pax')->nullable()->default(0);;
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tours');
    }
};
