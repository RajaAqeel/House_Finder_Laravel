<?php

namespace App\Http\Controllers;

use App\watchman_service;
use App\service_owner;
use App\city;
use App\sub_area;
use Auth;
use Illuminate\Http\Request;

class WatchmanServiceController extends Controller
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
        return view('add-watchman-info');
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
        $watchman = new watchman_service;
        $watchman->title = $request->get('service_title');
        $watchman->guard_name = $request->get('name');
        $watchman->phone_number = $request->get('number');
        $watchman->city_id = $request->get('city');
        $watchman->sub_area_id = $request->get('sub_area');
        $watchman->favourite = 'no';
        $watchman->verified = 'no';
        $watchman->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $watchman->service_provider_id =$so->id;
        $watchman->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\watchman_service  $watchman_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $watchman = watchman_service::find($id);
        $city_name = city::where('id', $watchman->city_id)->first();
        $sub_area_name = sub_area::where('id', $watchman->sub_area_id)->first();
        return view('watchman-service-page')->with('watchman', $watchman)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\watchman_service  $watchman_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $watchman = watchman_service::find($id);
        $city_name = city::where('id', $watchman->city_id)->first();
        $sub_area_name = sub_area::where('id', $watchman->sub_area_id)->first();
        return view('edit-watchman-service-info')->with('city', $city)->with('watchman', $watchman)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\watchman_service  $watchman_service
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
        $watchman = watchman_service::where('id', $id)->first();
        $watchman->title = $request->get('service_title');
        $watchman->guard_name = $request->get('name');
        $watchman->phone_number = $request->get('number');
        $watchman->city_id = $request->get('city');
        $watchman->sub_area_id = $request->get('sub_area');
        $watchman->favourite = 'no';
        $watchman->verified = 'no';
        $watchman->description = $request->input('description');
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $watchman->service_provider_id =$so->id;
        $watchman->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\watchman_service  $watchman_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(watchman_service $watchman_service)
    {
        //
    }
    public function delete($id)
    {
        DB::table('watchman_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
