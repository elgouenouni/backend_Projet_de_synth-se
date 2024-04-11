<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class prestataireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numbers='0123456789';
        for($i=0 ; $i<10 ;$i++){
            DB::table('prestataires')->insert(
                
                [
                    'cin'=>substr(str_shuffle($numbers), 0, 10),
                    'nom'=>fake()->lastName(),
                    'prenom'=>fake()->firstName(),
                    'telephone'=> '0755456789',
                    'situation'=>fake()->randomElement(['disponible','indisponibe']),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]
            );
        }
    }
}
