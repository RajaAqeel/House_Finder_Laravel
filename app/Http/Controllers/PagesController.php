<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\city;
use App\house;
class PagesController extends Controller
{
    public function home(){
        $cities = city::all();
        $houses = house::orderBy('created_at', 'ASC');
        return view('home')->with('cities', $cities);
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

    public function blogDetail()
    {
        return view('blog-detail');
    }

    public function propertiesList()
    {
        return view('properties-full-width-list');
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

     public function viewAllUsers()
     {
     
         return view('all-registered-users');
     }

     public function registerDataOperator()
     {
         return view('add-data-operator');
     }

     public function houseOwnerProfile()
     {
         return view('house-owner-profile');
     }

     public function houseOwnerViewProfile()
     {
         return view('house-owner-view-profile');
     }

     public function myProperties()
     {
         return view('my-properties');
     }
     
     public function myServices()
     {
         return view('my-services');
     }

     public function favouriteProperties()
     {
         return view('favourite-properties');
     }

     public function addProperty()
     {
         return view('add-house-01');
     }

     public function dataOperatorProfile()
     {
        return view('data-operator-profile');
     }

     public function viewUnverifiedProperties()
     {
        return view('view-unverified-properties');
     }

     public function viewUnverifiedServices()
     {
        return view('view-unverified-services');
     }

     public function addSubArea()
     {
         return view ('add-sub-area');
     }

     public function serviceProviderProfile()
     {
        return view('service-provider-profile');
     }

     public function viewAllServices()
     {
        return view('my-services');
     }

     public function viewFavouriteServices()
     {
        return view('favourited-services');
     }

     public function addService()
     {
        return view('add-internetProvider-info');
     }
}
