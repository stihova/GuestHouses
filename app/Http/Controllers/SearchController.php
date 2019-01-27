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
        $search = Input::get('search');
        $house = House::where('houseName','LIKE','%'.$search.'%')->get();
        if(count($house)>0)
            return view('houses.search')->withDetails($house)->withQuery($search);
        else return view('houses.search')->withMessage('No detail found. Try to search again!');
    }
}
