<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fondateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fondateurs')->insert(
        [
            'cin'=>"EE6789",
            'prenom'=>"ahmed",
            'nom'=>"tchaka",
            'tele'=>"0697654321",
            'situation'=>"disponible",
            'created_at'=>now(),
            'updated_at'=>now(),
            'password'=>'un123',
            'login'=>'ahmed'
        ]);
        DB::table('fondateurs')->insert(
        [
            'cin'=>"EE6766",
            'prenom'=>"abdsalam",
            'nom'=>"bouaad",
            'tele'=>"0699054321",
            'situation'=>"disponible",
            'created_at'=>now(),
            'updated_at'=>now(),
            'password'=>'7895',
            'login'=>'abdsalam'
        ]);
        DB::table('fondateurs')->insert(
        [
            'cin'=>"EE6723",
            'prenom'=>"khalid",
            'nom'=>"bobkbd",
            'tele'=>"0697654321",
            'situation'=>"indisponible",
            'created_at'=>now(),
            'updated_at'=>now(),
            'password'=>'khalid123',
            'login'=>'khalid'
        ]);
        DB::table('fondateurs')->insert(
        [
            'cin'=>"EE6734",
            'prenom'=>"karim",
            'nom'=>"chaaaaaa",
            'tele'=>"0697654321",
            'situation'=>"indisponible",
            'created_at'=>now(),
            'updated_at'=>now(),
            'password'=>'1234',
            'login'=>'karim'
        ]);
        DB::table('fondateurs')->insert(
            [
                'cin'=>"EE6790",
                'prenom'=>"ihsan",
                'nom'=>"banou",
                'tele'=>"0634564321",
                'situation'=>"indisponible",
                'created_at'=>now(),
                'updated_at'=>now(),
                'password'=>'12345',
                'login'=>'ihsan'
            ]);
    
    }
}
