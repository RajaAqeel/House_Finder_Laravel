<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\sub_area;

class DropDownController extends Controller
{
    public function allCity()
    {
        $cities = city::all();
        return view('add-internetProvider-info')->with('cities', $cities);
    }
}
