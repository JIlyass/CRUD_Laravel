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
    {   Schema::disableForeignKeyConstraints();
        Schema::create('produits', function (Blueprint $table) {
            $table->integer("codePr")->primary()->autoIncrement();
            $table->string('nomPr');
            $table->float('pu');
            $table->float('pa');
            $table->foreignId('categories_id')->constrained("categories");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
