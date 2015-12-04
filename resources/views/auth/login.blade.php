@extends('layout')

@section('title', "Connexion")

@section('body_class', "gray-bg")

@section('body')
    <div class="navy-bg lead p-xs m-t-lg text-center">
        CrisisCenter
    </div>
    <div class="container text-center ">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="m-t-xl">
                    <p>
                        Veuillez vous identifier
                    </p>

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach

                    {!! Form::open(['url' => 'auth/login', 'class' => 'm-t']) !!}
                        <div class="form-group">
                            {!! Form::text('username', old('username'), ['placeholder' => 'Identifiant', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::password('password', ['placeholder' => 'Mot de Passe', 'class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Connexion', ['class' => 'btn btn-primary block full-width m-b']) !!}

                    <p>
                        <b>Identifiants de connexion :</b> demo / demo
                    </p>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop