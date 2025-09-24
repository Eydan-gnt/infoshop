<?php

use App\Models\Client as ModelsClient;
use GuzzleHttp\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Client::class)->constrained()->cascadeOnDelete();
        });

        Schema::table('lignecommandes', function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Commande::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Produit::class)->constrained()->cascadeOnDelete();
        });

        Schema::table('client_produit', function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Client::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Produit::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
