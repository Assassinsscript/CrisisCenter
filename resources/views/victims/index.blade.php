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
            <caption>Victims list</caption>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Adress</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Contraindication</th>
                </tr>
            </thead>
            <tbody>
                @foreach($victims->all() as $victim)
                    <tr>
                        <td></td>
                        <td>{{ $victim.lastname }}</td>
                        <td>{{ $victim.firstname }}</td>
                        <td>{{ $victim.gender }}</td>
                        <td>{{ $victim.adress }}</td>
                        <td>{{ $victim.phone1 }}</td>
                        <td>{{ $victim.phone2 }}</td>
                        <td>{{ $victim.contraindication }}</td>
                    </tr>
                @endforeach
            </tbody>
        </tr>
    </table>
    {!! $victims->render() !!}
@stop