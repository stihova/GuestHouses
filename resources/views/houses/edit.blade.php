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
<h1>Edit</h1>
<div class="panel-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{action('HouseController@update' , $id )}}">
        <div class="form-group row">
            {{csrf_field()}}
            <input name="_method" type = "hidden" value = "PATCH">
            <label for="houseName" class="col-sm-2 col-form-label col-form-label-lg">House Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="houseName" value="{{$house->houseName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="locationName" class="col-sm-2 col-form-label col-form-label-lg">Location Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter Location name:" name="locationName" value="{{$house->locationName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="numberOfRooms" class="col-sm-2 col-form-label col-form-label-lg">Number Of Rooms</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Enter nummber of rooms" name="numberOfRooms" value="{{$house->numberOfRooms}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="numberOfBeds" class="col-sm-2 col-form-label col-form-label-lg">Number Of Beds</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Enter nummber of beds" name="numberOfBeds" value="{{$house->numberOfBeds}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="houseType" class="col-sm-2 col-form-label col-form-label-lg">House type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Enter type ot the house" name="houseType" value="{{$house->houseType}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn-outline-dark">Update</button>
        </div>
    </form>
</div>


</body>
</html>
@endsection