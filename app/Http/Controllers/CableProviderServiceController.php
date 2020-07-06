<?php

namespace App\Http\Controllers;

use App\cable_provider_service;
use App\service_owner;
use Auth;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;

class CableProviderServiceController extends Controller
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
        return view('add-cableOperator-info');
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
            'city' => ['required',],
            'sub_area' => ['required'],
            'service_title' => ['required'],
            'price' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'description' => ['required']
        ]);
        $cable = new cable_provider_service;
        $cable->title = $request->get('service_title');
        $cable->price_month = $request->get('price');
        $cable->address = $request->get('address');
        $cable->phone_number = $request->get('number');
        $cable->city_id = $request->get('city');
        $cable->sub_area_id = $request->get('sub_area');
        $cable->favourite = 'no';
        $cable->verified = 'no';
        $cable->status = 'Avl';
        $cable->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $cable->service_provider_id =$so->id;
        $cable->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cable_provider_service  $cable_provider_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cable = cable_provider_service::find($id);
        $city_name = city::where('id', $cable->city_id)->first();
        $sub_area_name = sub_area::where('id', $cable->sub_area_id)->first();
        return view('cable-service-page')->with('cable', $cable)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cable_provider_service  $cable_provider_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $cable = cable_provider_service::find($id);
        $city_name = city::where('id', $cable->city_id)->first();
        $sub_area_name = sub_area::where('id', $cable->sub_area_id)->first();
        return view('edit-cable-service-info')->with('city', $city)->with('cable', $cable)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cable_provider_service  $cable_provider_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'city_id' => ['required',],
            'sub_area' => ['required'],
            'service_title' => ['required'],
            'price' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'description' => ['required']
        ]);
        $cable = cable_provider_service::where('id', $id)->first();
        $cable->title = $request->get('service_title');
        $cable->price_month = $request->get('price');
        $cable->address = $request->get('address');
        $cable->phone_number = $request->get('number');
        $cable->city_id = $request->get('city_id');
        $cable->sub_area_id = $request->get('sub_area');
        $cable->favourite = 'no';
        $cable->verified = 'no';
        $cable->status = 'Avl';
        $cable->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $cable->service_provider_id =$so->id;
        $cable->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cable_provider_service  $cable_provider_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(cable_provider_service $cable_provider_service)
    {
        //
    }

    public function delete($id)
    {
        DB::table('cable_provider_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
