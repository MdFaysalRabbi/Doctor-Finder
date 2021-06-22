<?php

namespace App\Http\Controllers;

use App\About;
use App\Area;
use App\Event;
use App\Executive;
use App\Experience;
use App\Gallery;
use App\Knowledge;
use App\Member;
use App\Membership;
use App\Property;
use App\Salute;
use App\Slider;
use App\Tenant;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with('data',About::first())
//            ->with('gallery',Gallery::take(8)->get())
//            ->with('team',Executive::all());
            ->with('slider',Slider::all());

    }
    public function contactIndex()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about')->with('data',About::all());
    }
    public function properties()
    {
        return view('properties')->with('data',Property::all());
    }
    public function property_details($id)
    {

        $id=Property::find($id);
        return view('property_details')->with('data',$id);
    }

    public function necessity()
    {
        return view('necessity')->with('data',Tenant::all());
    }
    public function area()
    {
        return view('area')->with('data',Area::all());
    }


}
