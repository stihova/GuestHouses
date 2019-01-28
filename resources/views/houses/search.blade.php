@extends('layouts.app')
@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guest Houses</title>

</head>
<body>
<div class="container">
    @if(isset($details))
        <p style="font-size: 25px;" class="text-center"> Your search results are :</p>
        <h2>House Details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>House Name</th>
                <th>Location Name</th>
                <th>Number Of Rooms</th>
                <th>Number Of Beds</th>
                <th>House Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $house)
                <tr>
                    <td>{{$house->houseName}}</td>
                    <td>{{$house->locationName}}</td>
                    <td>{{$house->numberOfRooms}}</td>
                    <td>{{$house->numberOfBeds}}</td>
                    <td>{{$house->houseType}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
</div>
@elseif(isset($message))
    <h1>{{$message}}</h1>
@endif
<div class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('houses.index') }}"> Back</a>
</div>
</body>
</html>
@endsection