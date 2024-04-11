<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class admineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<5 ; $i++){
            DB::table('admines')->insert([

                'nom'=>fake()->lastName(),
                'prenom'=>fake()->firstName(),
                'adress'=>Str::random(50),
                'password'=>Str::random(5),
                'login'=>Str::random(7),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
