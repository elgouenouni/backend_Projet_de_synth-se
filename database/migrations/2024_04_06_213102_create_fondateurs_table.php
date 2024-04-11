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
        Schema::create('fondateurs', function (Blueprint $table) {
            $table->id();
            $table->string("cin",10);
            $table->string("prenom",50);
            $table->string("nom",50);
            $table->decimal("tele",20);
            $table->enum("situation",["disponible","indisponible"]);
            $table->string('password');
            $table->string('login',50);
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
        Schema::dropIfExists('fondateurs');
    }
};
