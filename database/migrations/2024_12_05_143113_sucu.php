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
        Schema::create('sucursals', function(Blueprint $table){
            $table -> id();
            $table -> string('name')->default('Nombre por defecto');
            $table -> text('address');
            $table -> integer('phone');
            $table -> string('rfc');
            $table -> boolean('is_active') -> default(true);
            $table -> string('total_employees');
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
