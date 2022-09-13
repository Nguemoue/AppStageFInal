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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string("nom");
            $table->date("date_incorporation");
            $table->string("login")->unique();
            $table->string("telephone");
            $table->string("adresse");
            $table->enum("sexe", ["Homme", "Femme"])->default("Homme");
            $table->float("taille")->nullable();
            $table->foreignId("position_personnel")->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->rememberToken();
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
