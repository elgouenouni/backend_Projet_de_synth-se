<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage d'appartement ",
                "descriptionS"=>"nous donne des bonne nettoyage d'appartement ",
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        );
        DB::table('services')->insert(

            [
                "nom_service"=>"nettoyage de villas ",
                "descriptionS"=>"nous donne des bonne nettoyage de villas ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]
            );
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage maison ",
                "descriptionS"=>"nous donne des bonne nettoyage maison ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage restaurant ",
                "descriptionS"=>"nous donne des bonne nettoyage restaurant ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]
            );
        DB::table('services')->insert(

            [
                "nom_service"=>"nettoyage de bureaux ",
                "descriptionS"=>"nous donne des bonne nettoyage de bureaux ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage saille d'événement ",
                "descriptionS"=>"nous donne des bonne nettoyage saille d'événement ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage de maison d'hote ",
                "descriptionS"=>"nous donne des bonne nettoyage de maison d'hote ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage de hotel ",
                "descriptionS"=>"nous donne des bonne nettoyage de hotel ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        DB::table('services')->insert(
            [
                "nom_service"=>"nettoyage de immeuble ",
                "descriptionS"=>"nous donne des bonne nettoyage de immeuble ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

    }
}
