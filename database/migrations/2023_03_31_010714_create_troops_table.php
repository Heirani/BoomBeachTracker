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
        Schema::create('troops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('temps_formation')->nullable();
            $table->string('vitesse_deplacement')->nullable();
            $table->string('vitesse_attaque')->nullable();
            $table->string('portee_attaque')->nullable();
            $table->integer('gain_xp')->nullable();
            $table->integer('capacite')->nullable();
            $table->string('portee_soin')->nullable();
            $table->string('vitesse_soin')->nullable();
            $table->integer('energie_deploiement')->nullable();
            $table->string('reduction_vitesse')->nullable();
            $table->string('duree_congelation')->nullable();
            $table->string('radius')->nullable();
        });

        Schema::create('troop_level_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troop_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('or')->nullable();
            $table->integer('immediat')->nullable();
            $table->timestamp('uptime')->nullable();
            $table->integer('niveau_arsenal_requis')->nullable();
            $table->integer('gain_xp')->nullable();
            $table->string('image_link')->nullable();
        });

        Schema::create('troop_level_santes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troop_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('sante');
        });

        Schema::create('troop_level_attaques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troop_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('degat')->nullable();
            $table->integer('degat_par_seconde')->nullable();
            $table->integer('degat_par_tir')->nullable();
            $table->string('duree_etourdissement')->nullable();
            $table->integer('pv_rendu_par_attaque')->nullable();
            $table->integer('soin_par_seconde')->nullable();
            $table->integer('degat_approximatif_par_seconde')->nullable();
            $table->integer('degat_explosion_mort')->nullable();
            $table->integer('degat_brulure_residuelle')->nullable();
            $table->string('rayon_etendu')->nullable();
        });

        Schema::create('troop_level_achats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('troop_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('or')->nullable();
            $table->integer('bois')->nullable();
            $table->integer('pierre')->nullable();
            $table->integer('fer')->nullable();
            $table->integer('energie_deploiement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troops');
        Schema::dropIfExists('troop_level_ups');
        Schema::dropIfExists('troop_level_santes');
        Schema::dropIfExists('troop_level_attaques');
        Schema::dropIfExists('troop_level_achats');
    }
};
