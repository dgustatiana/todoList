@extends('template')

@section('titre')
    about
@endsection

@section('contenu')
    <div style="text-align: center; border-bottom:2px rgb(180,220,100) solid; padding-bottom:20px;">
        <h1 style="background-color:rgb(180,220,100); padding-top:10px; padding-bottom:10px; margin-bottom:20px; border-top:2px rgb(180,180,180) solid; border-bottom:2px rgb(180,180,180) solid;">À propos</h1>

        <h2>Projet réalisé par: </h2>
        <p>Dgus Tatiana et Legrand Gary</p>
        <p>TR3TIN Technique informatiques
            <br>
            Année académique 2015-2016
        </p>
            <br>
        <h2>Dépôt Git du projet: </h2>
        <a href="https://github.com/dgustatiana/todoList">https://github.com/dgustatiana/todoList</a>

    </div>
@endsection
