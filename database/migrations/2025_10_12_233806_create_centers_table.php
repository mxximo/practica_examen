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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('poblacion');
            $table->string('direccion');

            $table->unsignedBigInteger('abilitie_employee_id');
           //$table->foreign('abilitie_employee_id')->references('id')->on('abilities_employees')->onDelate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }

   
};
