<?php

use App\Models\Client;
use App\Models\Possede;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Créer un produit

Route::get('/ajouterProduit', function () {
    
    $produit = new Produit();
    $produit->nomProduit = 'Produit 1';
    $produit->descProduit = 'Produit 1 description';
    $produit->prixProduit = 4.76;
    $produit->save();

});

//Créer un client

Route::get('/ajouterClient', function () {
    
    $client = new Client();
    $client->nomClient = 'Client 2';
    $client->prenomClient = 'Test 2';
    $client->emailClient = 'client2@mail.info';
    $client->save();

});

Route::get('/afficherProduit', function () {
    
    $produit = Produit::all();
    return $produit;

});

Route::get('/afficherProduit/{id}', function (string $id) {
    
    $produit = Produit::find($id);
    return $produit;

});

Route::get('/afficherProduitClient/{id}', function (string $id) {
    
    $produits = Produit::all();
    $possession = $produits->clients()->where('client_id', '=', $id)->get();
    return $possession;

});