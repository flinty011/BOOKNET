<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('admin');
        Schema::dropIfExists('superadmin');
    }

    public function down(): void
    {
        Schema::create('', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('superadmin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
};