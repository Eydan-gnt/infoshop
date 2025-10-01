<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function create() {
        return view('formulaires.formulaireTest');
    }

    public function store(Produit $request)
    {
        $article=new Produit();
        $article->nomProduit=request('nomProduit');
        $article->descProduit=request('descProduit');
        $article->prixProduit=request('prixProduit');
        $article->save();
        $success ='Produit ajouté';
        return back()->withSuccess($success);
    }
}
