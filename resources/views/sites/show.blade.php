@extends('layouts.app')
@section ('sites_title','Lista klientów')
@section('content')
ver 2.1

        <h3>Imię i nazwisko: {{$client->firstName}} {{$client->lastName}}</h3>
        <h3>adres: {{$client->address}}, {{$client->town}}</h3>
        <h3>e-mail: {{$client->email}}</h3>
<input type="submit" value="Brak działania" />










@endsection