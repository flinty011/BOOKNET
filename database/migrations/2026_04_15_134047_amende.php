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
        //
        
        Schema::create('amendes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emprunt_id')->constrained()->onDelete('cascade');
            $table->foreignId('retour_id')->constrained()->onDelete('cascade');
            $table->string('prix');
            $table->date('date_amende');
            $table->date('date_retour_prevue');
            $table->timestamps();
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
