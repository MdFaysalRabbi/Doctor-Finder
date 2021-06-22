<?php

namespace App\Http\Controllers;
use App\Slider;
use Session;
use Illuminate\Http\Request;
use App\Property;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        return view('admin.slider.index')->with('data',Slider::all())->with('n',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,[
//            'title'=>'required',
//            'image'=>'required|image'
//        ]);

        $image=$request->image;
        $image_new_name=time().$image->getClientOriginalName();
        $image->move('image/slider',$image_new_name);
//        $slider = new Slider();
//        $slider->title = $request->input('title');
//        $slider->text = $request->input('text');
        $slider=Slider::create([
            'title'=>$request->title,
            'text'=>$request->text,
            'image'=>$image_new_name
        ]);
//        if ($request->hasFile('images')) {
//            $file = $request->file('images');
//            // dd($request->file('image'));
//            $extension = $file->getClientOriginalExtension();
//            $filename = $file->getClientOriginalName();
//            $file->move('categorypic/', $filename);
//            $slider->image = $filename;
//        }

        Session::flash('success','You Successfully added an Image');

        return redirect()->route('slider.add');
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
        $slider=Slider::find($id);
        return view('admin.slider.edit')->with('slider',$slider);
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
        $slider=Slider::find($id);
        $this->validate($request,[
            'title'=>'required',
        ]);
        if ($request->hasFile('image'))
        {
            $image=$request->image;
            $image_new_name=time().$image->getClientOriginalName();
            $image->move('image/slider',$image_new_name);
            $slider->image=$image_new_name;
        }
        $slider->title=$request->title;
        $slider->text=$request->text;
        $slider->save();
        Session::flash('success','Slider updated successfully');
        return redirect()->route('slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::find($id);
        $slider->delete();
        unlink('image/slider/'.$slider->image);
        Session::flash('success','Slider Deleted successfully');
        return redirect()->back();
    }
}
