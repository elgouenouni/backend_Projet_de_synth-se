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
        DB::table('prestataireservice')->insert([
            [
                "date_debut"=>"2024-5-07",
                "service_termine"=>"true" ,
                "id_prestataire"=>Prestataire::all()->random()->id,
                "service_id"=> Service::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                "date_debut"=>"2024-9-07",
                "service_termine"=>"true" ,
                "id_prestataire"=>Prestataire::all()->random()->id,
                "service_id"=>Service::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                "date_debut"=>"2024-10-07",
                "service_termine"=>"false" ,
                "id_prestataire"=>Prestataire::all()->random()->id,
                "service_id"=>Service::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                "date_debut"=>"2024-9-07",
                "service_termine"=>"false" ,
                "id_prestataire"=>Prestataire::all()->random()->id,
                "service_id"=> Service::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
            ]
        );
    }
}
