@extends('base')

@section('content')

    <h2>Nouveau Produit</h2>
    <form action="{{ route('formulaires.formulaireTest') }}" method="post">
        @csrf
        <label for="nomProduit">Nom du Produit :</label> <br>
        <input name="nomProduit" type="text"><br>
        <label for="descProduit">Description du Produit :</label><br>
        <textarea name="descProduit" id=""></textarea><br>
        <label for="prixProduit">Prix du Produit :</label><br>
        <input name="prixProduit" type="number" step="0.01"><br>
        <input type="submit" value="Ajouter un produit"><br>
    </form>

@endsection