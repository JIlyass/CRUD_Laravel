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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->integer("produits_codePr");
            $table->foreignID("commandes_id")->constrained("commandes");
            $table->foreign("produits_codePr")->references('codePr')->on("produits");
            $table->integer("qteA");
            $table->timestamps();

            $table->primary(['commandes_id','produits_codePr']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_commande');
    }
};
