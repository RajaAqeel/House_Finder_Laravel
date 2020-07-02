<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
class DropDownController extends Controller
{
    public function allCity()
    {
        $cities = city::all();
        return view('add-internetProvider-info')->with('cities', $cities);
    }
    public function allCityC()
    {
        $cities = city::all();
        return view('add-cableOperator-info')->with('cities', $cities);
    }
    public function allCityH()
    {
        $cities = city::all();
        return view('add-housemaid-info')->with('cities', $cities);
    }
    public function allCityP()
    {
        $cities = city::all();
        return view('add-parking-info')->with('cities', $cities);
    }
    public function allCitySc()
    {
        $cities = city::all();
        return view('add-schoolvan-info')->with('cities', $cities);
    }
    public function allCitySw()
    {
        $cities = city::all();
        return view('add-sweeper-info')->with('cities', $cities);
    }
    public function allCityW()
    {
        $cities = city::all();
        return view('add-watchman-info')->with('cities', $cities);
    }
    public function cities()
    {
        $cities = city::all();
        return view('add-house-01')->with('cities', $cities);
    }

    public function citiesP()
    {
        $cities = city::all();
        return view('edit-property-information')->with('cities', $cities);
    }

    public function homePageCities()
    {
        $cities = city::all();
        return view('/')->with('cities', $cities);
    }
}
