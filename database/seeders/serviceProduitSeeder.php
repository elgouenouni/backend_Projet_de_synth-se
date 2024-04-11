<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Produit;



class serviceProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0 ; $i <10 ;$i++){
         DB::table('serviceproduit')->insert([
            'service_id'=>Service::all()->random()->id,
            'produit_id'=>Produit::all()->random()->id,
         ]);
       }
    }
}
