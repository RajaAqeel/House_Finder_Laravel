<?php

namespace App\Http\Controllers;

use App\housemaid_service;
use App\service_owner;
use Auth;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;

class HousemaidServiceController extends Controller
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
        return view('add-housemaid-info');
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
            'name' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'sub_area' => ['required'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'description' => ['required'],
            'city' => ['required'],
        ]);
        $housemaid = new housemaid_service;
        $housemaid->name = $request->get('service_title');
        $housemaid->address = $request->get('address');
        $housemaid->phone_number = $request->get('number');
        $housemaid->city_id = $request->get('city');
        $housemaid->sub_area_id = $request->get('sub_area');
        $housemaid->favourite = 'no';
        $housemaid->verified = 'no';
        $housemaid->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $housemaid->service_provider_id =$so->id;
        $housemaid->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\housemaid_service  $housemaid_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $housemaid = housemaid_service::find($id);
        $city_name = city::where('id', $housemaid->city_id)->first();
        $sub_area_name = sub_area::where('id', $housemaid->sub_area_id)->first();
        return view('housemaid-service-page')->with('housemaid', $housemaid)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\housemaid_service  $housemaid_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $housemaid = housemaid_service::find($id);
        $city_name = city::where('id', $housemaid->city_id)->first();
        $sub_area_name = sub_area::where('id', $housemaid->sub_area_id)->first();
        return view('edit-housemaid-service-info')->with('city', $city)->with('housemaid', $housemaid)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\housemaid_service  $housemaid_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'sub_area' => ['required'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'description' => ['required'],
            'city' => ['required'],
        ]);
        $housemaid = housemaid_service::where('id', $id)->first();
        $housemaid->name = $request->get('service_title');
        $housemaid->address = $request->get('address');
        $housemaid->phone_number = $request->get('number');
        $housemaid->city_id = $request->get('city');
        $housemaid->sub_area_id = $request->get('sub_area');
        $housemaid->favourite = 'no';
        $housemaid->verified = 'no';
        $housemaid->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $housemaid->service_provider_id =$so->id;
        $housemaid->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\housemaid_service  $housemaid_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(housemaid_service $housemaid_service)
    {
        //
    }
    public function delete($id)
    {
        DB::table('housemaid_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
