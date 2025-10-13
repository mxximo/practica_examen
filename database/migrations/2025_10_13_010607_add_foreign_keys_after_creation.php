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
        Schema::table('employees', function (Blueprint $table){
            $table->foreign('department_id')->references('id')->on('departments')->nullOnDelate();
        });

        Schema::table('departments', function (Blueprint $table){
            $table->foreign('center_id')->references('id')->on('centers')->nullOnDelate();
        });

        Schema::table('centers', function (Blueprint $table){
            $table->foreign('abilitie_employee_id')->references('id')->on('abilities_employees')->nullOnDelate();
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
