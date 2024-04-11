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
        Schema::create('servicereservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_actuel');
            $table->enum('reservation_termine',["true","false"])->default('false');
            $table->foreignId("service_id")->constrained("services")->onDelete('cascade');
            $table->foreignId("reservation_id")->constrained("reservations")->onDelete('cascade');
            $table->foreignId("id_client")->constrained("clients")->onDelete('cascade');
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
        Schema::dropIfExists('servicereservations');
    }
};
