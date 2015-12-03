@extends('layout')

@section('title', "Connexion")

@section('body_class', "gray-bg")

@section('body')
    <div class="navy-bg lead p-xs m-t-lg text-center">
        CrisisCenter
    </div>
    <div class="middle-box text-center loginscreen m-t-xl">
        <div class="m-t-xl">
            <p>
                Veuillez vous identifier
            </p>
            {!! Form::open(['url' => 'auth/login', 'class' => 'm-t']) !!}
                <div class="form-group">
                    {!! Form::text('username', old('username'), ['placeholder' => 'Identifiant', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['placeholder' => 'Mot de Passe', 'class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Connexion', ['class' => 'btn btn-primary block full-width m-b']) !!}

            {!! Form::close() !!}
            {{ dd($errors) }}
        </div>
    </div>

@stop