<?php

namespace App\Http\Controllers;
use DB;
use App\city;
use App\sub_area;
use App\house_owner;
use App\users;
use App\parking_service;
use App\internet_service_provider;
use App\cable_provider_service;
use App\schoolvan_service;
use App\sweeper_service;
use App\watchman_service;
use App\housemaid_service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchhouse(Request $request)
    {
        $this->validate($request, [
            'city_id' => ['required'],
            'sub_area' => ['required'],
        ]);
        $city = $request->get('city_id');
        $sub_area = $request->get('sub_area');
        $bedrooms = $request->get('bedrooms');
        $unit = $request->get('unit');
        $value = $request->get('value');
        $type = $request->get('type');
        $price = $request->get('price');
        $parking = NULL;
        $cable_op = NULL;
        $school_van = NULL;
        $sweeper = NULL;
        $watch_man = NULL;
        $houses_m = NULL;
        $internets = NULL;
        $verified = 'yes';
        $status = 'Avl';

        if($request->get('p')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $parking = parking_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('co')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $cable_op = cable_provider_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('sv')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $school_van = schoolvan_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('sw')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $sweeper = sweeper_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('w')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $watch_man = watchman_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('hm')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $houses_m = housemaid_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('ip')=="1")
        {
            $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
            $internets = internet_service_provider::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        $houses = DB::table('houses')->where('status', $status)->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
        return view('properties-full-width-list')->with('houses', $houses)->with('parking', $parking)->with('internets', $internets)->with('cable_op', $cable_op)->with('school_van', $school_van)->with('sweeper', $sweeper)->with('watch_man', $watch_man)->with('houses_m', $houses_m);
    }
}
