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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->date("dateDevis");
            $table->decimal("total");
            $table->enum("devis_valid",['true','false'])->default('true');
            $table->enum("devis_estPayé",['true','false'])->default('false');
            $table->foreignId("reservation_id")->constrained('reservations')->onDelete('cascade');
            $table->foreignId("client_id")->constrained("clients")->onDelete('cascade');
            $table->foreignId("fondateur_id")->constrained("fondateurs")->onDelete('cascade');
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
        Schema::dropIfExists('devis');
    }
};
