<?php

namespace App\Http\Controllers;

use App\Lecturer;
use App\Organisation;
use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function searchHouses(){
        $q = Input::get('q');
        $house = House::where('houseName','LIKE','%'.$q.'%')->orWhere('locationName','LIKE','%'.$q.'%')->get();
        if(count($house)>0)
            return view('houses.search')->withDetails($house)->withQuery($q);
        else return view('houses.search')->withMessage('No detail found. Try to search again!');
    }

    public function searchLocations(){
        $q = Input::get('q');
        $location = House::where('locationName','LIKE','%'.$q.'%')->get();
        if(count($location)>0)
            return view('location.search')->withDetails($location)->withQuery($q);
        else return view('location.search')->withMessage('No detail found. Try to search again!');
    }

    public function searchTypes(){
        $q = Input::get('q');
        $type = House::where('houseType','LIKE','%'.$q.'%')->get();
        if(count($type)>0)
            return view('types.search')->withDetails($type)->withQuery($q);
        else return view('types.search')->withMessage('No detail found. Try to search again!');
    }
}
