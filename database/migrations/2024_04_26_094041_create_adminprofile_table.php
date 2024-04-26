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
        Schema::create('adminprofile', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('summary')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('skills')->nullable();
            $table->string('responsibilities')->nullable();
            $table->string('achievements')->nullable();
            $table->string('affiliations')->nullable();
            $table->string('attributes')->nullable();
            $table->string('languages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminprofile');
    }
};
