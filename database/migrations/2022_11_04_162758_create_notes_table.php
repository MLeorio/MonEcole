<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->float('note')->nullable(false);
            $table->enum('typeNote', ['Devoir', 'Interro', 'Composition'])->nullable(false);
            $table->enum('periode', ['Trimestre 1','Trimestre 2','Trimestre 3','Semestre 1','Semestre 2'])->nullable(false);
            $table->year('annee-scolaire')->default(date("Y"))->nullable(false);

            $table->foreignId('matiere_id')->constrained()->onDelete('cascade');
            $table->foreignId('eleve_id')->constrained()->onDelete('cascade');
            $table->foreignId('professeur_id')->constrained()->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
