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
        Schema::create('prestataire_service', function (Blueprint $table) {
            $table->id();
            $table->date("date_debut")->nullable();
            $table->enum("service_termine", ["true","false"])->default('false');
            $table->foreignId('prestataire_id')->constrained('prestataires');
            $table->foreignId('service_id')->constrained('services');
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
        Schema::dropIfExists('prestataireservice');
    }
};
