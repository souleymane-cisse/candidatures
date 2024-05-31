@extends('layouts.app')

@section('content')
<h1>Résultats du Sondage 2</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Classe</th>
            <th>Choix #1</th>
            <th>Choix #2</th>
            <th>Choix #3</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resultats as $resultat)
        <tr>
            <td>{{ $resultat->id }}</td>
            <td>{{ $resultat->user->name }}</td>
            <td>{{ $resultat->user->profile->prenom }}</td>
            <td>{{ $resultat->user->email }}</td>
            <td>{{ $resultat->user->profile->numero_telephone }}</td>
            <td>{{ $resultat->user->profile->classe }}</td>
            <td>{{ $resultat->choix1 }}</td>
            <td>{{ $resultat->choix2 }}</td>
            <td>{{ $resultat->choix3 }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
