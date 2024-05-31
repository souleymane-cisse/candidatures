@extends('layouts.app')

@section('content')
<h1>Sondage 1</h1>
<form method="POST" action="{{ url('/sondage1') }}">
    @csrf
    <p>Confirmez-vous votre intérêt pour ce stage ?</p>
    <input type="radio" id="oui" name="interet" value="1" required>
    <label for="oui">Oui, je confirme</label><br>
    <input type="radio" id="non" name="interet" value="0" required>
    <label for="non">Non, merci</label><br>
    <button type="submit">Soumettre</button>
</form>
@endsection
