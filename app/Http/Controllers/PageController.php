<?php

namespace App\Http\Controllers;

use App\Models\Health_Center;
use App\Models\Services;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $services = Services::orderby('id', 'DESC')->get();
        return view('front.index', compact('services'));
    }

    public function about(){
        return view('front.about');
    }

    public function service(){
        $services = Services::orderby('id', 'DESC')->get();
        return view('front.service', compact('services'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function center(){
        $centers = Health_Center::orderby('id', 'DESC')->get();
        return view('front.centers', compact('centers'));
    }

    public function center_single($id){
        $center = Health_Center::findorfail($id);
        return view('front.center_single', compact('center'));
    }

    public function service_single($id){
        $service = Services::findorfail($id);
        return view('front.service_single', compact('service'));
    }
}
