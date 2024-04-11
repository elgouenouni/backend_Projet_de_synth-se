<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numbers='0123456789';
        for($i=0 ; $i <10 ;$i++){
            DB::table('clients')->insert([

                'cin'=>substr(str_shuffle($numbers), 0, 10),
                'nom'=>fake()->lastName(),
                'prenom'=>fake()->firstName(),
                'adress'=>Str::random(50),
                'tele'=>'012345678',
                'email'=>fake()->safeEmail(),
                'password'=>Str::random(5),
                'login'=>Str::random(7),
                'created_at'=>now(),
                'updated_at'=>now()
           
            ]);
        }
    }
}
