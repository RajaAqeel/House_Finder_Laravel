<?php

namespace App\Http\Controllers;
use DB;
use App\city;
use App\sub_area;
use App\house_owner;
use App\users;
use App\parking_service;
use App\internet_service_provider;
use App\cable_operator_service;
use App\schoolvan_service;
use App\sweeper_service;
use App\watchman_service;
use App\housemaid_service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchhouse(Request $request)
    {
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
        $internet_p = NULL;
        $verified = 'yes';

        if($request->get('p')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $parking = parking_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('co')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $cable_op = cable_operator_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('sv')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $school_van = schoolvan_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('sw')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $sweeper = sweeper_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('w')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $watch_man = watchman_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('hm')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $houses_m = housemaid_service::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        if($request->get('ip')=="1")
        {
            $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->first();
            $internet_p = internet_service_provider::where('city_id',$city)->where('sub_area_id',$sub_area)->get();
        }
        $house = DB::table('houses')->where('verified', $verified)->where('city_id', $city)->where('sub_area_id', $sub_area)->orWhere('bedrooms', $bedrooms)->orWhere('area_unit', $unit)->orWhere('area_value', $value)->orWhere('type', $type)->orWhere('price', $price)->get();
        return view('properties-full-width-list')->with('house', $house)->with('parking', $parking)->with('internet_p', $internet_p);
    }
}
