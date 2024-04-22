<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class reservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-12-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-7-06',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-8-07',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-8-3',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );

        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2020-10-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2020-02-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2023-05-012',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2017-01-06',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );

        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );

        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
        DB::table('reservations')->insert(
            [
                'date_reservation'=>'2004-09-02',
                'id_client'=>Client::all()->random()->id,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
    }
}
