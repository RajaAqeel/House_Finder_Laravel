<?php

namespace App\Http\Controllers;

use App\house;
use App\city;
use App\sub_area;
use App\house_owner;
use Auth;
use DB;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $id =$ho->id;
        $city_name = city::select('name')->where('id', $ho->city_id)->get();
        $sub_area_name = sub_area::select('name')->where('id', $ho->sub_area_id)->get();
        $allHouses = house::where('house_owner_id', $id)->paginate(10);
        return view('/my-properties')->with('allHouses', $allHouses)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/add-house-01');
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
            'title' => 'required',
            'type' => 'required',
            'price' => 'required',
            'negotiable' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'unit' => 'required',
            'area' => 'required',
            'description' => 'required',
            'city' => 'required',
            'address' => 'required',
            'sub_area' => 'required',
        ]);
        $houses = new house;
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $houses->title = $request->input('title');
        $houses->type = $request->input('type');
        $houses->price = $request->input('type');
        $houses->bedrooms = $request->input('bedroom');
        $houses->bathrooms = $request->input('bathroom');
        $houses->area_unit = $request->input('unit');
        $houses->area_value = $request->input('area');
        $houses->description = $request->input('description');
        $houses->house_owner_id = $ho->id;
        $houses->city_id = $request->input('city');
        $houses->sub_area_id = $request->input('sub_area');
        $houses->address = $request->input('address');
        $houses->favourite = 'no';
        $houses->verified = 'no';
        $houses->status = 'Available';
        $houses->negotiable = $request->input('negotiable');
        $houses->save();
        return view('my-properties');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = house::find($id);
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('properties-single2')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(house $house)
    {
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, house $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(house $house)
    {
        //
    }
    public function delete($id)
    {
        DB::table('houses')->where('id', $id)->delete();
        return redirect('/my-properties'); 
    }
}
