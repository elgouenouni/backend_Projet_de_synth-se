<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Reservation;
use App\Models\Client;


class serviceReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ;$i++){
            DB::table('servicereservations')->insert([

                'date_actuel'=>"2023-05-12",
                'reservation_termine'=>fake()->randomElement(['true','false']),
                'service_id'=>Service::all()->random()->id,
                'reservation_id'=>Reservation::all()->random()->id,
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
