<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Prestataire;
use App\Models\Service;

class prestataireServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0 ; $i< 40 ; $i++){
            DB::table('prestataire_service')->insert([
                [
                    "date_debut"=>"2024-5-07",
                    "service_termine"=>fake()->randomElement(['true','false']) ,
                    "prestataire_id"=>Prestataire::all()->random()->id,
                    "service_id"=> Service::all()->random()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]
            ]);
        }
    } 
}
