<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('listing_attributes', function (Blueprint $table) {
            $table->unsignedBigInteger('attribute_id')->nullable()->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes');
        });
    }


    public function down(): void
    {
        Schema::table('listing_attributes', function (Blueprint $table) {
            $table->dropForeign(['attribute_id']);
            $table->dropColumn('attribute_id');
        });
    }
};
