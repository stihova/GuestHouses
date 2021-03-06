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
            <h1>Creation form</h1>
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

                    <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
                        <div class="form-group row">
                            {{csrf_field()}}
                            <label class="col-sm-2 col-form-label col-form-label-lg">Image Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"
                                       placeholder="imageDescription" name="imageDescription">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customImage" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control form-control-lg" id="customImage"
                                       placeholder="customImage" name="fileName" height="42" width="42">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

            </div>
            </body>
            </html>
@endsection