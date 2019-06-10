@extends('layouts.app')
@section ('sites_title','Nowa strona')
@section('content')
    Wersja 1.23

    <form actions="{{route('sites.save')}}" method="post">

        <input type="text" name="_token" value="{{csrf_token()}}">

        <div class = "form-group">
            <input type="text" name= "title" class="form-control" placeholder="Podaj tytuł">
        </div>

        <div class = "form-group">
            <textarea  name= "description" class="form-control" placeholder="Podaj treść"></textarea>
        </div>

        <div class = "form-group">
            <button  class= "btn btn-primary">Zapisz, nie działa problem z metodą Post-Get</button>
        </div>

    </form>

@endsection
