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
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        Schema::create('support_level_ups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('support_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('capacite')->nullable();
            $table->string('type_capacite')->nullable();
            $table->integer('or')->nullable();
            $table->integer('bois')->nullable();
            $table->integer('pierre')->nullable();
            $table->integer('fer')->nullable();
            $table->integer('immediat')->nullable();
            $table->timestamp('uptime')->nullable();
            $table->timestamp('niveau_qg_requis')->nullable();
            $table->integer('gain_xp')->nullable();
            $table->string('image_link')->nullable();
        });

        Schema::create('support_disponibles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('support_id')->constrained()->onDelete('cascade');
            $table->integer('niveau_qg')->nullable();
            $table->integer('nombre');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
