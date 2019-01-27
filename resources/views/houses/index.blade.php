@extends('layouts.app')
        @section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guest Houses</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<h1>Houses</h1>
@if (Auth::check())
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('houses/create') }}">Create a House</a>
</div>
@endif

<br>

<form action="{{action("SearchController@searchHouses")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search"
               placeholder="Search a house"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<table class="table table-striped table-bordered">
    <thead style="background-color: #dd99ff">
    <tr>
        <th>ID</th>
        <th>House Name</th>
        <th>Location</th>
        <th>Number Of Rooms</th>
        <th>Number Of Beds</th>
        <th>House Type</th>
        <th colspan="4">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($houses as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->houseName}}</td>
            <td>{{$value->locationName}}</td>
            <td>{{$value->numberOfRooms}}</td>
            <td>{{$value->numberOfBeds}}</td>
            <td>{{$value->houseType}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('houses.show', $value->id) }}" method="POST">Show</a>
            </td>

            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('houses/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('HouseController@destroy', $value->id )}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            @endif

        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
@endsection