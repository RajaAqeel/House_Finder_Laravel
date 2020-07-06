<?php

namespace App\Http\Controllers;

use App\house;
use App\city;
use App\sub_area;
use App\house_owner;
use App\service_owner;
use App\user;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\h_picture;
use App\watchman_service;
use App\parking_service;

class TenantPagesController extends Controller
{
    public function view($id)
    {
        $allHouses = house::where('id', '!=', $id)->orderBy('created_at')->get();
        $house = house::find($id);
        $houseOwner = house_owner::where('id', $house->house_owner_id)->first();
        $userId = $houseOwner->user_id;
        $user = user::where('id', $userId)->first();
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('tenant-property-page')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('allHouses', $allHouses)->with('houseOwner', $houseOwner)->with('user', $user);
    }

    public function cable($id)
    {
        $cable = cable_provider_service::find($id);
        $city_name = city::where('id', $cable->city_id)->first();
        $sub_area_name = sub_area::where('id', $cable->sub_area_id)->first();
        return view('tenant-cable-page')->with('cable', $cable)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    public function housemaid($id)
    {
        $housemaid = housemaid_service::find($id);
        $city_name = city::where('id', $housemaid->city_id)->first();
        $sub_area_name = sub_area::where('id', $housemaid->sub_area_id)->first();
        return view('tenant-housemaid-page')->with('housemaid', $housemaid)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }
    public function internet($id)
    {
        $internet = internet_service_provider::find($id);
        $city_name = city::where('id', $internet->city_id)->first();
        $sub_area_name = sub_area::where('id', $internet->sub_area_id)->first();
        return view('tenanat-internet-page')->with('internet', $internet)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }
    public function parking($id)
    {
        $parking = parking_service::find($id);
        $city_name = city::where('id', $parking->city_id)->first();
        $sub_area_name = sub_area::where('id', $parking->sub_area_id)->first();
        return view('tenant-parking-page')->with('parking', $parking)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }
    public function schoolvan($id)
    {
        $schoolvan = schoolvan_service::find($id);
        $city_name = city::where('id', $schoolvan->city_id)->first();
        $sub_area_name = sub_area::where('id', $schoolvan->sub_area_id)->first();
        return view('tenant-schoolvan-page')->with('schoolvan', $schoolvan)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }
    public function sweeper($id)
    {
        $sweeper = sweeper_service::find($id);
        $id = $sweeper->service_provider_id;
        $service_owner_id = service_owner::where('id', $id)->first();
        $city_name = city::where('id', $sweeper->city_id)->first();
        $sub_area_name = sub_area::where('id', $sweeper->sub_area_id)->first();
        return view('tenant-sweeper-page')->with('sweeper', $sweeper)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('service_owner_id', $service_owner_id);
    }
    public function watchman($id)
    {
        $watchman = watchman_service::find($id);
        $houseOwner = service_owner::where('id', $watchman->service_provider_id)->first();
        $userId = $houseOwner->user_id;
        $user = user::where('id', $userId)->first();
        $city_name = city::where('id', $watchman->city_id)->first();
        $sub_area_name = sub_area::where('id', $watchman->sub_area_id)->first();
        return view('tenant-watchman-page')->with('watchman', $watchman)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('houseOwner', $houseOwner)->with('user', $user);
    }


}
