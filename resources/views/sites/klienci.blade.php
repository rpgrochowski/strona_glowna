@extends('layouts.app')
@section ('sites_title','Lista klientów')
@section('content')

    <table class="table table-hover">
        <tr>
            <td>Imie</td>
            <td>Nazwisko</td>
            <td>Miasto</td>
            <td>Adres</td>
            <td>e-mail</td>

        </tr>
        @foreach($wypisz as $client)
            <tr>
                <td><a href = "{{route('client.show', $client )}}">{{$client->firstName}}</a></td>
                <td>{{$client->lastName}}</td>
                <td>{{$client->town}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->email}}</td>

            </tr>
        @endforeach
    </table>

@endsection