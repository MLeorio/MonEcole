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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(false);
            $table->string('prenom')->nullable(false);
            $table->date('birthday')->nullable(false);
            $table->string('nationalite')->nullable(false);
            $table->string('genre')->nullable(false);
            $table->date('dateEntree')->nullable(false);
            $table->string('adresse')->nullable(false);
            $table->string('matricule')->unique()->nullable(false);
            $table->string('password')->default('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
            $table->integer('etat')->default(0)->nullable(false);
            $table->foreignId('personnel_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('eleves');
    }
};