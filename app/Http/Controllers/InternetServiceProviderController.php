<?php

namespace App\Http\Controllers;

use App\internet_service_provider;
use App\service_owner;
use Illuminate\Http\Request;
use Auth;

class InternetServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return redirect('/add-internetProvider-info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\internet_service_provider  $internet_service_provider
     * @return \Illuminate\Http\Response
     */
    public function show(internet_service_provider $internet_service_provider)
    {
        //
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
}
