<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Fondateur;



class devisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ; $i++){
           DB::table('devis') ->insert(
            [
             'dateDevis'=>fake()->dateTime(),
             'total'=> 4000 ,
             'devis_valid'=>fake()->randomElement(['true','false']),
             'devis_estPayé'=>fake()->randomElement(['true','false']),
             'reservation_id'=>Reservation::all()->random()->id,
             'client_id'=>Client::all()->random()->id ,
             'fondateur_id'=>Fondateur::all()->random()->id,
             'created_at'=>now(),
            'updated_at'=>now()
           ]
          );
        }
    }
}
