@extends('app')

@section('title')
    Accueil
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('flash');
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                    Welcome in INSPINIA Static SeedProject
                </h1>
                <small>
                    It is an application skeleton for a typical web app. You can use it to quickly bootstrap your webapp projects and dev environment for these projects.
                </small>
            </div>
            <div>
                <p>
                    <a href="{{ URL::to('victims/index') }}"><button type="button" class="btn btn-primary">Victim platform</button></a>
                </p>
            </div>
        </div>
    </div>
@stop