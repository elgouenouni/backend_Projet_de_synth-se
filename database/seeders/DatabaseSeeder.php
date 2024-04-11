<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this -> call(
                [ 
                    // etape 1 :  lencer juste admineSeeder et clientSeeder et  serviceSeeder  et commenter lautre pour eviter une error 
                    //etape 2 ;   ouvrer tous les commenteire et commter ce que vous avez lancer avant
                    Categorie::class,
                    admineSeeder::class, // etape 1
                    clientSeeder::class, // etape 1
                    devisSeeder::class, // etape3 c'est le derniere fichier que tu doit lencer  et commenter les autre fichier 
                    fondateurSeeder::class,
                    prestataireSeeder::class,
                    prestataireServiceSeeder::class,
                    produitSeeder::class,
                    reservationSeeder::class,
                    serviceProduitSeeder::class,
                    serviceReservationSeeder::class,
                    serviceSeeder::class //atape1
                ]
                );
    }
}
