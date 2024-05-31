@extends('layouts.app')

@section('content')
<h1>Sondage 2</h1>
<form method="POST" action="{{ url('/sondage2') }}">
    @csrf
    <p>Classez les domaines suivants par ordre de préférence :</p>
    <select name="choix1" required>
        <option value="">Choix #1</option>
        <option value="Web">Web</option>
        <option value="Mobile">Mobile</option>
        <option value="IOT">IOT</option>
    </select><br>
    <select name="choix2" required>
        <option value="">Choix #2</option>
        <option value="Web">Web</option>
        <option value="Mobile">Mobile</option>
        <option value="IOT">IOT</option>
    </select><br>
    <select name="choix3" required>
        <option value="">Choix #3</option>
        <option value="Web">Web</option>
        <option value="Mobile">Mobile</option>
        <option value="IOT">IOT</option>
    </select><br>
    <button type="submit">Soumettre</button>
</form>
@endsection
