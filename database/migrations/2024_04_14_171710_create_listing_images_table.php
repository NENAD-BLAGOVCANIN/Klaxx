<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('listing_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('listing_id');
        $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
        $table->string('image_path');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('listing_images');
    }
};
