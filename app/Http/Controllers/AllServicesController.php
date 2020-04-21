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


class AllServicesController extends Controller
{
    public function allServices()
    {
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $id =$so->id;
        $internetServices = internet_service_provider::where('service_provider_id', $id)->get();
        $cableServices = cable_provider_service::where('service_provider_id', $id)->get();
        $housemaidServices = housemaid_service::where('service_provider_id', $id)->get();
        $parkingServices = parking_service::where('service_provider_id', $id)->get();
        $schoolVanServices = schoolvan_service::where('service_provider_id', $id)->get();
        $sweeperServices = sweeper_service::where('service_provider_id', $id)->get();
        $watchmanServices = watchman_service::where('service_provider_id', $id)->get();
        return view('my-services')->with('internet', $internetServices)->with('cable', $cableServices)->with('housemaid', $housemaidServices)->with('parking', $parkingServices)->with('schoolvan', $schoolVanServices)->with('sweeper', $sweeperServices)->with('watchman', $watchmanServices);
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
        return view('all-registered-services')->with('internet', $internetServices)->with('cable', $cableServices)->with('housemaid', $housemaidServices)->with('parking', $parkingServices)->with('schoolvan', $schoolVanServices)->with('sweeper', $sweeperServices)->with('watchman', $watchmanServices);
    }
    public function delete($id)
    {
        DB::table('internet_service_providers')->where('id', $id)->delete();
        DB::table('cable_provider_services')->where('id', $id)->delete();
        DB::table('housemaid_services')->where('id', $id)->delete();
        DB::table('parking_services')->where('id', $id)->delete();
        DB::table('schoolvan_services')->where('id', $id)->delete();
        DB::table('sweeper_services')->where('id', $id)->delete();
        DB::table('watchman_services')->where('id', $id)->delete();
        return redirect('/my-services');
    }
    public function deleteService($id)
    {
        DB::table('internet_service_providers')->where('id', $id)->delete();
        DB::table('cable_provider_services')->where('id', $id)->delete();
        DB::table('housemaid_services')->where('id', $id)->delete();
        DB::table('parking_services')->where('id', $id)->delete();
        DB::table('schoolvan_services')->where('id', $id)->delete();
        DB::table('sweeper_services')->where('id', $id)->delete();
        DB::table('watchman_services')->where('id', $id)->delete();
        return redirect('/all-registered-services');
    }
}
