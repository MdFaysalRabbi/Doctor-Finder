<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;
use Session;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        return view('admin.tenant.index')->with('data',Tenant::all())->with('n',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tenant.add');
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
            'budget'=>'required',
            'home'=>'required',
            'washroom'=>'required',
            'balcony'=>'required'
        ]);
        $tenant=Tenant::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'division'=>$request->division,
            'district'=>$request->district,
            'location'=>$request->location,
            'tenant_type'=>$request->tenant_type,
            'budget'=>$request->budget,
            'home'=>$request->home,
            'washroom'=>$request->washroom,
            'balcony'=>$request->balcony,
            'comment'=>$request->comment,

        ]);

        Session::flash('success','You Successfully added Patient');

        return redirect()->route('tenant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant=Tenant::find($id);
        return view('admin.tenant.edit')->with('tenant',$tenant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        $tenant=Tenant::find($id);
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'division'=>'required',
            'district'=>'required',
            'location'=>'required',
            'tenant_type'=>'required',
            'budget'=>'required',
            'home'=>'required',
            'washroom'=>'required',
            'balcony'=>'required'
        ]);
        $tenant->name=$request->name;
        $tenant->phone=$request->phone;
        $tenant->division=$request->division;
        $tenant->district=$request->district;
        $tenant->location=$request->location;
        $tenant->tenant_type=$request->tenant_type;
        $tenant->budget=$request->budget;
        $tenant->washroom=$request->washroom;
        $tenant->balcony=$request->balcony;
        $tenant->home=$request->home;
        $tenant->comment=$request->comment;
        $tenant->save();
        Session::flash('success','Patient updated successfully');
        return redirect()->route('tenant.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Tenant::find($id);
        $property->delete();
        Session::flash('success','Patient Deleted successfully');
        return redirect()->back();
    }
}
