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
        Schema::create('products', function(Blueprint $table){
            $table -> id();
            $table -> string('name');
            $table -> text('description');
            $table -> float('price');
            $table -> string('category');
            $table -> integer('stock');
            $table -> text('url_img');
            $table -> boolean('is_active') -> default(true);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};