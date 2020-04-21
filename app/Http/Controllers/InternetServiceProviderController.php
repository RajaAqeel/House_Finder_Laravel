<?php

namespace App\Http\Controllers;

use App\internet_service_provider;
use App\service_owner;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;
use Auth;
use DB;

class InternetServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $id =$so->id;
        $allInternetServices = internet_service_provider::where('service_provider_id', $id)->paginate(10);
        return view('/my-services')->with('allInternetServices', $allInternetServices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-internetProvider-info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'sub_area' => 'required',
            'service_title' => 'required',
            'price' => 'required',
            'address' => 'required',
            'number' => 'required',
            'c_hl' => 'required',
            'cc_hl' => 'required',
        ]);
        $internet = new internet_service_provider;
        $internet->title = $request->get('service_title');
        $internet->price_mb = $request->get('price');
        $internet->address = $request->get('address');
        $internet->complaint_helpline = $request->get('c_hl');
        $internet->customer_service_helpline = $request->get('cc_hl');
        $internet->phone_number = $request->get('number');
        $internet->city_id = $request->get('city');
        $internet->sub_area_id = $request->get('sub_area');
        $internet->favourite = 'no';
        $internet->verified = 'no';
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $internet->service_provider_id =$so->id;
        $internet->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\internet_service_provider  $internet_service_provider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $internet = internet_service_provider::find($id);
        $city_name = city::where('id', $internet->city_id)->first();
        $sub_area_name = sub_area::where('id', $internet->sub_area_id)->first();
        return view('services-single2')->with('internet', $internet)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\internet_service_provider  $internet_service_provider
     * @return \Illuminate\Http\Response
     */
    public function edit(internet_service_provider $internet_service_provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\internet_service_provider  $internet_service_provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, internet_service_provider $internet_service_provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\internet_service_provider  $internet_service_provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(internet_service_provider $internet_service_provider)
    {
        //
    }
    public function delete($id)
    {
        DB::table('internet_service_providers')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
