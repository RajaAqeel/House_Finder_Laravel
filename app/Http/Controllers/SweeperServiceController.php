<?php

namespace App\Http\Controllers;

use App\sweeper_service;
use App\service_owner;
use Auth;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;

class SweeperServiceController extends Controller
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
        return view('add-sweeper-info');
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
            'unit' => 'required',
            'value' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);
        $sweeper = new sweeper_service;
        $sweeper->name = $request->get('name');
        $sweeper->address = $request->get('address');
        $sweeper->phone_number = $request->get('number');
        $sweeper->city_id = $request->get('city');
        $sweeper->sub_area_id = $request->get('sub_area');
        $sweeper->favourite = 'no';
        $sweeper->verified = 'no';
        $sweeper->descripton = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $sweeper->service_provider_id =$so->id;
        $sweeper->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sweeper_service  $sweeper_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sweeper = sweeper_service::find($id);
        $city_name = city::where('id', $sweeper->city_id)->first();
        $sub_area_name = sub_area::where('id', $sweeper->sub_area_id)->first();
        return view('sweeper-service-page')->with('sweeper', $sweeper)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sweeper_service  $sweeper_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $sweeper = sweeper_service::find($id);
        $city_name = city::where('id', $sweeper->city_id)->first();
        $sub_area_name = sub_area::where('id', $sweeper->sub_area_id)->first();
        return view('edit-sweeper-service-info')->with('city', $city)->with('sweeper', $sweeper)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sweeper_service  $sweeper_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'city' => 'required',
            'sub_area' => 'required',
            'service_title' => 'required',
            'unit' => 'required',
            'value' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);
        $sweeper = sweeper_service::where('id', $id)->first();
        $sweeper->name = $request->get('name');
        $sweeper->address = $request->get('address');
        $sweeper->phone_number = $request->get('number');
        $sweeper->city_id = $request->get('city');
        $sweeper->sub_area_id = $request->get('sub_area');
        $sweeper->favourite = 'no';
        $sweeper->verified = 'no';
        $sweeper->descripton = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $sweeper->service_provider_id =$so->id;
        $sweeper->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sweeper_service  $sweeper_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(sweeper_service $sweeper_service)
    {
        //
    }
    
    public function delete($id)
    {
        DB::table('sweeper_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
