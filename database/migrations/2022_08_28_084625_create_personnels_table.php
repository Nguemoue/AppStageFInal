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
            $table->string("nom");
            $table->date("date_incorporation");
            $table->string("login")->unique();
            $table->string("password");
            $table->string("telephone");
            $table->string("adresse");
            $table->enum("sexe",["Homme","Femme"])->default("Homme");
            $table->float("taille");
            $table->foreignId("position_personnel")->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
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
