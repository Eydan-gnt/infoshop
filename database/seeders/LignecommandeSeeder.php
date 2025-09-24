<?php

namespace Database\Seeders;

use App\Models\Lignecommande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LignecommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lignecommande::create([
            'commande_id' => 1,
            'produit_id' => 1,
            'quantite' => 3
        ]);
    }
}
