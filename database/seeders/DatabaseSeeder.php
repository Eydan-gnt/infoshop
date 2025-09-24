<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProduitSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CommandeSeeder::class);
        $this->call(LignecommandeSeeder::class);
    }
}
