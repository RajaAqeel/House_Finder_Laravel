<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service_owner;
use Auth;
use App\internet_service_provider;
use App\watchman_service;
use App\cable_provider_service;
use App\housemaid_service;
use App\parking_service;
use App\schoolvan_service;
use App\sweeper_service;
use DB;


class AllServicesController extends Controller
{
    public function index()
    {
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $id =$so->id;
        $allInternetServices = internet_service_provider::where('service_provider_id', $id)->get();
        $allCableServices = cable_provider_service::where('service_provider_id', $id)->get();
        $allHousemaidServices = housemaid_service::where('service_provider_id', $id)->get();
        $allParkingServices = parking_service::where('service_provider_id', $id)->get();
        $allSchoolVanServices = schoolvan_service::where('service_provider_id', $id)->get();
        $allSweeperServices = sweeper_service::where('service_provider_id', $id)->get();
        $allWatchmanServices = watchman_service::where('service_provider_id', $id)->get();
        return view('/my-services')->with('allInternetServices', $allInternetServices)->with('allCableServices', $allCableServices)->with('allHousemaidServices', $allHousemaidServices)->with('allParkingServices', $allParkingServices)->with('allSchoolVanServices', $allSchoolVanServices)->with('allSweeperServices', $allSweeperServices)->with('allWatchmanServices', $allWatchmanServices)->with('so', $so);
    }
    public function allServicesAdmin()
    {
        $internetServices = internet_service_provider::all();
        $cableServices = cable_provider_service::all();
        $housemaidServices = housemaid_service::all();
        $parkingServices = parking_service::all();
        $schoolVanServices = schoolvan_service::all();
        $sweeperServices = sweeper_service::all();
        $watchmanServices = watchman_service::all();
        return view('all-registered-services')->with('internetServices', $internetServices)->with('cableServices', $cableServices)->with('housemaidServices', $housemaidServices)->with('parkingServices', $parkingServices)->with('schoolVanServices', $schoolVanServices)->with('sweeperServices', $sweeperServices)->with('watchmanServices', $watchmanServices);
    }
    public function deleteI($id)
    {
        DB::table('internet_service_providers')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteC($id)
    {
        DB::table('cable_provider_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteH($id)
    {
        DB::table('housemaid_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteP($id)
    {
        DB::table('parking_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteSc($id)
    {
        DB::table('schoolvan_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteSw($id)
    {
        DB::table('sweeper_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteW($id)
    {
        DB::table('watchman_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteServiceI($id)
    {
        DB::table('internet_service_providers')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceW($id)
    {
        DB::table('watchman_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceC($id)
    {
        DB::table('cable_provider_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceH($id)
    {
        DB::table('housemaid_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceP($id)
    {
        DB::table('parking_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceSc($id)
    {
        DB::table('schoolvan_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
    public function deleteServiceSw($id)
    {
        DB::table('sweeper_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
}
