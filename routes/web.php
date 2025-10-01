<?php

use App\Http\Controllers\ProduitController;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Lignecommande;
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
    
    $client = Client::FindOrFail($id);
    $produit = $client->produits;
    return $produit;

});

Route::get('/formulaire/ajouterProduit', [ProduitController::class, 'create'])->name('formulaires.formulaireTest');
Route::post('/formulaire', [ProduitController::class, 'store'])->name('formulaires.formulaireTest');



Route::get('/formulaire/ajouterClient', function () {
    
    $_POST['nomClient']='NDF';
    $_POST['prenomClient']='prenom original';
    $_POST['emailClient']='mailduclient@client.com';
    $client = new Client();
    $client->nomClient = $_POST['nomClient'];
    $client->prenomClient = $_POST['prenomClient'];
    $client->emailClient = $_POST['emailClient'];
    $client->save();
    return $client;
});

Route::get('/formulaire/ajouterCommande', function () {
    
    $_POST['idClient']=1;
    $_POST['dateHeure']='1999-12-12';
    $_POST['listeProduit']=[1=>2, 2=>2, 3=>1];

    $commande = new Commande();
    $commande->client_id = $_POST['idClient'];
    $commande->dateHeure = $_POST['dateHeure'];
    $commande->save();

    foreach ($_POST['listeProduit'] as $produit => $quantite) {
        $ligneComm = new Lignecommande();
        $ligneComm->produit_id=$produit;
        $ligneComm->quantite=$quantite;
        $ligneComm->commande_id=$commande->getKey();
        $ligneComm->save();

        $user=Client::find($_POST['idClient']);
        $user->produits()->attach($produit);
    }

    return $commande;
});

Route::get('/afficherCommande/{id}', function (string $id) {
    
    $commande = Commande::with('lignecommandes')->find($id);

    return $commande;

});