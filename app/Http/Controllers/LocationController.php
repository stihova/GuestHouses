<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Location;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $locationModel = new Location();
        $alllocation = $locationModel::all();

        return view('locations.index')->with('locations', $alllocation);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'locationName'=>'bail||required|min:2|max:255',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('locations/create')->WithErrors($validator);
        }else{
            $location = new Location([
                'locationName'=> $request->get('locationName'),
            ]);

            $location->save();
            return redirect('locations');
        }
    }

    public function show($id)
    {
        $location = Location::find($id);

        return view('locations.show',compact('location','id'));
    }

    public function edit($id)
    {
        $location = Location::find($id);

        return view('locations.edit',compact('location','id'));
    }

    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->locationName = $request->get('locationName');
        $location->save();
        return redirect('locations')->with('success', 'Task was successful!');
    }

    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        //

        return redirect('locations')->with('success','Location have been deleted');
    }
}
