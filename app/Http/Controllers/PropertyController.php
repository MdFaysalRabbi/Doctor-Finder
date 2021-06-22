<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Session;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        return view('admin.property.index')->with('data',Property::all())->with('n',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'division'=>'required',
            'district'=>'required',
            'location'=>'required',
            'tenant_type'=>'required',
            'rent'=>'required',
            'room_quantity'=>'required',
            'washroom_quantity'=>'required',
            'balcony_quantity'=>'required',
            'floor'=>'required',
//            'image'=>'required|image',

        ]);
        $image=$request->image;
        $image_new_name=time().$image->getClientOriginalName();
        $image->move('image/property',$image_new_name);
        $property=Property::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'division'=>$request->division,
            'district'=>$request->district,
            'location'=>$request->location,
            'tenant_type'=>$request->tenant_type,
            'lift'=>$request->lift,
            'rent'=>$request->rent,
            'room_quantity'=>$request->room_quantity,
            'washroom_quantity'=>$request->washroom_quantity,
            'balcony_quantity'=>$request->balcony_quantity,
            'floor'=>$request->floor,
            'image'=>$image_new_name,
            'comment'=>$request->comment,

        ]);

        Session::flash('success','You Successfully added Doctor');

        return redirect()->route('property.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Property::find($id);
        return view('admin.property.edit')->with('property',$property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        $property=Property::find($id);
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'division'=>'required',
            'district'=>'required',
            'location'=>'required',
            'tenant_type'=>'required',
            'rent'=>'required',
            'room_quantity'=>'required',
            'washroom_quantity'=>'required',
            'balcony_quantity'=>'required',
            'floor'=>'required',
        ]);
        if ($request->hasFile('image'))
        {
            $image=$request->image;
            $image_new_name=time().$image->getClientOriginalName();
            $image->move('image/property',$image_new_name);
            $property->image=$image_new_name;
        }
        $property->name=$request->name;
        $property->phone=$request->phone;
        $property->division=$request->division;
        $property->district=$request->district;
        $property->location=$request->location;
        $property->tenant_type=$request->tenant_type;
        $property->lift=$request->lift;
        $property->rent=$request->rent;
        $property->room_quantity=$request->room_quantity;
        $property->washroom_quantity=$request->washroom_quantity;
        $property->balcony_quantity=$request->balcony_quantity;
        $property->floor=$request->floor;
        $property->save();
        Session::flash('success','Doctor updated successfully');
        return redirect()->route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Property::find($id);
        $property->delete();
        unlink('image/property/'.$property->image);
        Session::flash('success','Doctor Deleted successfully');
        return redirect()->back();
    }
}
