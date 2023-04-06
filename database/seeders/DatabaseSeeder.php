<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\utilisateur::factory(10)->create();

        //\App\Models\User::factory()->create([
        //     'email' => 'test@example.com',
        //     'password' => 'test',
        // ]);
        //\App\Models\sauce::factory(10)->create();
        $this->call([
            UtilisateurSeeder::class,
            sauceSeeder::class,
        ]);
    }
}
