<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert(
            [
                'nom_produit'=>"savon",
                'description'=>"parfaits savon",
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nom_produit'=>"pEau De Javel SANILI HOME Citron 5L",
                'description'=>"parfaits javel pour les ..",
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nom_produit'=>"sani ",
                'description'=>"Nettoyants Vaisselles",
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nom_produit'=>"produit2",
                'description'=>"description sur produit 2 ",
                'created_at'=>now(),
                'updated_at'=>now()
            ]

            );
    }
}
