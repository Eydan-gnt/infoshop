<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/ajouterProduit', function () {
    
    $produit = new Produit();
    $produit->nomProduit = 'Produit 1';
    $produit->descProduit = 'Produit 1 description';
    $produit->prixProduit = 4.76;

});
