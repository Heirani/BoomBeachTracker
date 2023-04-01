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
        Schema::create('armements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('zone')->nullable();
            $table->string('type_zone')->nullable();
            $table->integer('nombre_tir')->nullable();
            $table->integer('vitesse_mouvment')->nullable();
            $table->integer('sante')->nullable();
            $table->integer('degat_par_seconde')->nullable();
            $table->string('vitesse_attaque')->nullable();
            $table->integer('rayon_action')->nullable();
        });

        Schema::create('armement_level_ups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('armement_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('or')->nullable();
            $table->integer('immediat')->nullable();
            $table->timestamp('uptime')->nullable();
            $table->timestamp('niveau_arsenal_requis')->nullable();
            $table->integer('gain_xp')->nullable();
            $table->string('image_link')->nullable();
        });

        Schema::create('armement_level_attaques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('armement_id')->constrained()->onDelete('cascade');
            $table->integer('level');
            $table->integer('degat')->nullable();
            $table->integer('duree')->nullable();
            $table->integer('soin_par_impulsion')->nullable();
            $table->double('soin_par_seconde')->nullable();
            $table->integer('soin_total')->nullable();
            $table->integer('duree_etourdissement')->nullable();
            $table->integer('degat_un_missile')->nullable();
            $table->integer('degat_totaux')->nullable();
            $table->integer('bestioles_deployees')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armements');
        Schema::dropIfExists('armement_level_ups');
        Schema::dropIfExists('armement_level_attaques');
    }
};
