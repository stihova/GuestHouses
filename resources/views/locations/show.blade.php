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
<h1>Locations</h1>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Locations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('locations.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Location name:</strong>
        </td>
        <td>
            {{ $location->locationName }}
        </td>
    </tr>
</table>
</body>
</html>
@endsection