@extends('layouts.app')

@section('content')
<h1>Profil de l'utilisateur</h1>
<p>Nom : {{ Auth::user()->name }}</p>
<p>Prénom : {{ Auth::user()->profile->prenom }}</p>
<p>Email : {{ Auth::user()->email }}</p>
<p>Numéro de téléphone : {{ Auth::user()->profile->numero_telephone }}</p>
<p>Adresse : {{ Auth::user()->profile->adresse }}</p>
<p>Classe : {{ Auth::user()->profile->classe }}</p>
<p>Ecole : {{ Auth::user()->profile->ecole }}</p>
<p>Domaine : {{ Auth::user()->profile->domaine }}</p>
<p>Niveau : {{ Auth::user()->profile->niveau }}</p>
@endsection
