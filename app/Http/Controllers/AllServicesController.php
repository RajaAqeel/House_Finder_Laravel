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
}
