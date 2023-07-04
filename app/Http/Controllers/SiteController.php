<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('frontend.index');
    }
    public function about() {
        return view('frontend.about');
    }
    public function destination() {
        return view('frontend.destination');
    }
    public function destinationDetail() {
        return view('frontend.destination-detail');
    }
    public function service() {
        return view('frontend.service');
    }
    public function servicesDetail() {
        return view('frontend.service-detail');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function enquiry() {
        return view('frontend.enquiry');
    }

    // public Function home() {
    //     if(auth()->user()->role == 'admin'){
    //     //     // return redirect('/admin');
    //        return view('admin.dashboard');
    //     }
    //     return view('home');
    // }
}
