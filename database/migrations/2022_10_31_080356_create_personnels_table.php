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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(false);
            $table->string('prenom')->nullable(false);
            $table->string('numero')->nullable(false)->unique();
            $table->string('email')->nullable(false)->unique();
            $table->string('nationalite')->nullable(false);
            $table->date('birthday')->nullable(false);
            $table->date('dateEmbauche')->nullable(false);
            $table->string('adresse');
            $table->string('username')->unique()->nullable(false);
            $table->string('password')
            ->default('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');// valeur: password
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
        Schema::dropIfExists('personnels');
    }
};