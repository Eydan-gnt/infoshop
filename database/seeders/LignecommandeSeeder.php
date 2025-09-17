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
            'id_commande' => 1,
            'id_produit' => 2,
            'quantite' => 3,
        ]);
    }
}
