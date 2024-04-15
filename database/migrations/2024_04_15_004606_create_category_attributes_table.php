<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('attribute_id')->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_attributes');
    }
};
