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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('vitesse_deplacement')->nullable();
            $table->string('vitesse_attaque')->nullable();
            $table->string('portee_attaque')->nullable();
            $table->integer('bestioles_generees')->nullable();
            $table->integer('bestioles_generees_maximum')->nullable();
            $table->integer('vitesse_soin')->nullable();
        });

        Schema::create('hero_level_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('or')->nullable();
            $table->integer('immediat')->nullable();
            $table->timestamp('uptime')->nullable();
            $table->integer('niveau_qg_requis')->nullable();
            $table->integer('gain_xp')->nullable();
            $table->string('image_link')->nullable();
        });

        Schema::create('hero_level_santes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('sante');
        });

        Schema::create('hero_level_attaques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('degat')->nullable();
            $table->integer('degat_par_seconde')->nullable();
            $table->integer('degat_par_tir')->nullable();
            $table->integer('degat_grenade')->nullable();
            $table->integer('temps_generation_bestioles')->nullable();
            $table->integer('soin_par_seconde')->nullable();
            $table->integer('reduction_degat')->nullable();
            $table->timestamp('limite_degat_par_coup')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
        Schema::dropIfExists('hero_level_ups');
        Schema::dropIfExists('hero_level_santes');
        Schema::dropIfExists('hero_level_attaques');
    }
};
