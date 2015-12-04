@extends('app')

@section('title')
    Accueil
@stop

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h2 class="text-center">
                Catégories
            </h2>
            <div class="list-group">
            @foreach($categories as $index => $category)
                <a href="#" class="list-group-item">{{ $category }}</a>
            @endforeach
            </div>
        </div>
        <div class="col-md-10">

        </div>
    </div>
@stop