<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\House;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    public function index()
    {
        $houseModel = new House();
        $allhouses = $houseModel::all();

        return view('houses.index')->with('houses', $allhouses);
    }

    public function create()
    {
        return view('houses.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'houseName'=>'bail||required|min:2|max:255',
            'locationName'=>'required|min:2|max:128',
            'numberOfRooms'=>'required',
            'numberOfBeds'=>'required',
            'houseType'=>'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('houses/create')->WithErrors($validator);
        }else{
            $house = new House([
                'houseName'=> $request->get('houseName'),
                'locationName'=> $request->get('locationName'),
                'numberOfRooms'=> $request->get('numberOfRooms'),
                'numberOfBeds'=> $request->get('numberOfBeds'),
                'houseType'=> $request->get('houseType'),
            ]);

            $house->save();
            return redirect('houses');
        }
    }

    public function show($id)
    {
        $house = House::find($id);

        return view('houses.show',compact('house','id'));
    }

    public function edit($id)
    {
        $house = House::find($id);

        return view('houses.edit',compact('house','id'));
    }

    public function update(Request $request, $id)
    {
        $house = House::find($id);
        $house->houseName = $request->get('houseName');
        $house->locationName = $request->get('locationName');
        $house->numberOfRooms = $request->get('numberOfRooms');
        $house->numberOfBeds = $request->get('numberOfBeds');
        $house->houseType = $request->get('houseType');
        $house->save();
        return redirect('houses')->with('success', 'Task was successful!');
    }

    public function destroy($id)
    {
        $house = House::find($id);
        $house->delete();
        //

        return redirect('houses')->with('success','House have been deleted');
    }
}
