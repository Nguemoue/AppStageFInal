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
        Schema::table('elements', function (Blueprint $table) {        
            $table->foreignId("unite_id")->nullable()->constrained()->nullOnDelete();
        });
        Schema::table('chefs', function (Blueprint $table) {        
            $table->foreignId("unite_id")->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elements', function (Blueprint $table) {
            $table->dropConstrainedForeignId("unite_id");
        });
        Schema::table('chefs', function (Blueprint $table) {
            $table->dropConstrainedForeignId("unite_id");
        });
    }
};
