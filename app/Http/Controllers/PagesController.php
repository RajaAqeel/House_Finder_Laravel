<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function about(){
        return view('about');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function blog(){
        return view('blog-full-width');
    }

    public function contact(){
        return view('contact');
    }
     public function addCity()
     {
         return view('add-city');
     }
     public function adminViewProfile()
     {
     
         return view('admin-view-profile');
     }

     public function adminProfile()
     {
     
         return view('admin-profile');
     }

     public function viewAllProperties()
     {
     
         return view('my-properties');
     }
}
