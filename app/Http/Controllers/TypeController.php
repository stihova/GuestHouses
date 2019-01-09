<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Type;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index()
    {
        $typeModel = new Type();
        $alltype = $typeModel::all();

        return view('type.index')->with('types', $alltype);
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'houseType'=>'bail||required|min:2|max:255',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('types/create')->WithErrors($validator);
        }else{
            $type = new Type{[
                'houseType'=> $request->get('houseType'),
            ]};

            $type->save();
            return redirect('types');
        }
    }

    public function show($id)
    {
        $type = Type::find($id);

        return view('types.show',compact('type','id'));
    }

    public function edit($id)
    {
        $type = Type::find($id);

        return view('types.edit',compact('type','id'));
    }

    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->houseType = $request->get('houseType');
        $type->save();
        return redirect('types')->with('success', 'Task was successful!');
    }

    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        //

        return redirect('types')->with('success','Type have been deleted');
    }
}
