<?php

namespace App\Http\Controllers;

use App\schoolvan_service;
use App\service_owner;
use Auth;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;

class SchoolvanServiceController extends Controller
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
        return view('add-schoolvan-info');
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
            'number' => 'required',
        ]);
        $schoolvan = new schoolvan_service;
        $schoolvan->title = $request->get('service_title');
        $schoolvan->driver_name = $request->input('name');
        $schoolvan->phone_number = $request->get('number');
        $schoolvan->city_id = $request->get('city');
        $schoolvan->sub_area_id = $request->get('sub_area');
        $schoolvan->favourite = 'no';
        $schoolvan->verified = 'no';
        $schoolvan->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $schoolvan->service_provider_id =$so->id;
        $schoolvan->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schoolvan_service  $schoolvan_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schoolvan = schoolvan_service::find($id);
        $city_name = city::where('id', $schoolvan->city_id)->first();
        $sub_area_name = sub_area::where('id', $schoolvan->sub_area_id)->first();
        return view('schoolvan-service-page')->with('schoolvan', $schoolvan)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schoolvan_service  $schoolvan_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $schoolvan = schoolvan_service::find($id);
        $city_name = city::where('id', $schoolvan->city_id)->first();
        $sub_area_name = sub_area::where('id', $schoolvan->sub_area_id)->first();
        return view('edit-schoolvan-service-info')->with('city', $city)->with('schoolvan', $schoolvan)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schoolvan_service  $schoolvan_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'city' => 'required',
            'sub_area' => 'required',
            'service_title' => 'required',
            'number' => 'required',
        ]);
        $schoolvan = schoolvan_service::where('id', $id)->first();
        $schoolvan->title = $request->get('service_title');
        $schoolvan->driver_name = $request->input('name');
        $schoolvan->phone_number = $request->get('number');
        $schoolvan->city_id = $request->get('city');
        $schoolvan->sub_area_id = $request->get('sub_area');
        $schoolvan->favourite = 'no';
        $schoolvan->verified = 'no';
        $schoolvan->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $schoolvan->service_provider_id =$so->id;
        $schoolvan->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schoolvan_service  $schoolvan_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(schoolvan_service $schoolvan_service)
    {
        //
    }

    public function delete($id)
    {
        DB::table('schoolvan_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
