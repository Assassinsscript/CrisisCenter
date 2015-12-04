@extends('app')

@section('content')
    <div class="col-lg-10">
        <caption>Supported new victim</caption>
        <p>
            <a href="{{ URL::to('victims/create') }}"><button type="button" class="btn btn-primary">Form</button></a>
        </p>
    </div>
    <table class="table">
        <tr>
            <caption>Liste des victimes</caption>
            <thead>
                <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Others</th></tr>
            </thead>
            <tbody>
                @foreach($victims->all() as $victim)
                    <tr>
                        <td></td>
                        <td>{{ $victim.lastname }}</td>
                        <td>{{ $victim.firstname }}</td>
                    </tr>
                @endforeach
            </tbody>
        </tr>
    </table>
    {!! $victims->render() !!}
@stop