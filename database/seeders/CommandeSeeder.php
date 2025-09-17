<?php

namespace Database\Seeders;

use App\Models\Commande;
use Database\Factories\CommandeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commande::create([
            'dateHeure' => 1999-12-12,
            'client_id' => '1',
        ]);
    }
}
