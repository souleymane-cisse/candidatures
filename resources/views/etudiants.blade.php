@extends('layouts.app')

@section('content')
<h1>Liste des étudiants inscrits</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Email</th>
            <th>Numéro de Téléphone</th>
            <th>Adresse</th>
            <th>Classe</th>
            <th>Ecole</th>
            <th>Domaine</th>
            <th>Niveau</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->name }}</td>
            <td>{{ $etudiant->profile->prenom }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->profile->numero_telephone }}</td>
            <td>{{ $etudiant->profile->adresse }}</td>
            <td>{{ $etudiant->profile->classe }}</td>
            <td>{{ $etudiant->profile->ecole }}</td>
            <td>{{ $etudiant->profile->domaine }}</td>
            <td>{{ $etudiant->profile->niveau }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
