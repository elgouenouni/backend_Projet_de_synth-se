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
                 
                    Categorie::class,
                    admineSeeder::class,
                    clientSeeder::class,
                    serviceSeeder::class, 
                    fondateurSeeder::class,
                    prestataireSeeder::class,
                    prestataireServiceSeeder::class,
                    produitSeeder::class,
                    reservationSeeder::class,
                    serviceProduitSeeder::class,
                    serviceReservationSeeder::class,
                    devisSeeder::class 
                ]
                );
    }
}
