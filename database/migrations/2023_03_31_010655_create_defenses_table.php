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
        Schema::create('defenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('taille')->nullable();
            $table->string('type')->nullable();
        });

        Schema::create('defense_level_ups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('defense_id')->constrained()->onDelete('cascade');
            $table->integer('level');
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

        Schema::create('defense_level_santes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('defense_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('sante');
        });

        Schema::create('defense_level_attaques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('defense_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('degat_par_seconde')->nullable();
            $table->integer('degat_par_tir')->nullable();
            $table->integer('brulure_residuelle')->nullable();
            $table->integer('brulure_residuelle_totale')->nullable();
            $table->integer('degat_maximum_par_seconde')->nullable();
            $table->integer('degat_par_salve')->nullable();
            $table->timestamp('duree_etourdissement')->nullable();
        });

        Schema::create('defense_disponibles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('defense_id')->constrained()->onDelete('cascade');
            $table->integer('niveau_qg')->nullable();
            $table->integer('nombre');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defenses');
        Schema::dropIfExists('defense_level_ups');
        Schema::dropIfExists('defense_level_santes');
        Schema::dropIfExists('defense_level_attaques');
        Schema::dropIfExists('defense_disponibles');

    }
};
