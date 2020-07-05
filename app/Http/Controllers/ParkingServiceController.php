<?php

namespace App\Http\Controllers;

use App\parking_service;
use App\service_owner;
use Auth;
use App\city;
use App\sub_area;
use Illuminate\Http\Request;

class ParkingServiceController extends Controller
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
        return view('add-parking-info');
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
            'city' => ['required'],
            'sub_area' => ['required'],
            'service_title' => ['required'],
            'unit' => ['required'],
            'value' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'img_url' => ['required']
        ]);
        $parking = new parking_service;
        $parking->title = $request->get('service_title');
        $parking->area_unit = $request->get('unit');
        $parking->area_value = $request->get('value');
        $parking->address = $request->get('address');
        $parking->phone_number = $request->get('number');
        $parking->city_id = $request->get('city');
        $parking->sub_area_id = $request->get('sub_area');
        $parking->favourite = 'no';
        $parking->verified = 'no';
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $parking->service_provider_id =$so->id;

        if ($request->hasFile('img_url')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('img_url')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('img_url')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('img_url')->storeAs('public/parking',$fileNameToStore);
            $parking->image = $fileNameToStore;
       
        } else {
            $fileNameToStore = 'no_image';
        }
        $parking->save();
        return redirect('/my-services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parking_service  $parking_service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parking = parking_service::find($id);
        $city_name = city::where('id', $parking->city_id)->first();
        $sub_area_name = sub_area::where('id', $parking->sub_area_id)->first();
        return view('parking-service-page')->with('parking', $parking)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\parking_service  $parking_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::all();
        $parking = parking_service::find($id);
        $city_name = city::where('id', $parking->city_id)->first();
        $sub_area_name = sub_area::where('id', $parking->sub_area_id)->first();
        return view('edit-parking-service-info')->with('city', $city)->with('parking', $parking)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parking_service  $parking_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'city' => ['required'],
            'sub_area' => ['required'],
            'service_title' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'unit' => ['required'],
            'value' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'address' => ['required'],
            'number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'img_url' => ['required']
        ]);
        $parking = parking_service::where('id', $id)->first();
        $parking->title = $request->get('service_title');
        $parking->area_unit = $request->get('unit');
        $parking->area_value = $request->get('value');
        $parking->address = $request->get('address');
        $parking->phone_number = $request->get('number');
        $parking->city_id = $request->get('city');
        $parking->sub_area_id = $request->get('sub_area');
        $parking->favourite = 'no';
        $parking->verified = 'no';
        $so = service_owner::where('user_id',Auth::user()->id)->first();
        $parking->service_provider_id =$so->id;
        if ($request->hasFile('img_url')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('img_url')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('img_url')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('img_url')->storeAs('public/parking',$fileNameToStore);
            $parking->image = $fileNameToStore;
       
        } else {
            $fileNameToStore = 'no_image';
        }
        $parking->update();
        return redirect('/my-services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parking_service  $parking_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(parking_service $parking_service)
    {
        //
    }

    public function delete($id)
    {
        DB::table('parking_services')->where('id', $id)->delete();
        return redirect('/my-services'); 
    }
}
