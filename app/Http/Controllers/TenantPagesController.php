<?php

namespace App\Http\Controllers;

use App\house;
use App\city;
use App\sub_area;
use App\house_owner;
use App\user;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\h_picture;

class TenantPagesController extends Controller
{
    public function view($id)
    {
        $allHouses = house::orderBy('created_at')->get();
        $house = house::find($id)->first();
        $houseOwner = house_owner::where('id', $house->house_onwer_id)->first();
        $userId = $houseOwner->user_id;
        $user = user::where('id', $userId)->first();
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('tenant-property-page')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('allHouses', $allHouses)->with('houseOwner', $houseOwner)->with('user', $user);
    }
}
