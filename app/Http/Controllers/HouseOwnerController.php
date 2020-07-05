<?php

namespace App\Http\Controllers;

use App\house_owner;
use Auth;
use Image;
use Illuminate\Http\Request;

class HouseOwnerController extends Controller
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
        return view('house-owner-profile');
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
            'phone_number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'bio' => ['required'],
            'cnic' => ['required', 'regex:/^[0-9]+$/', 'digits_between:13,13', 'numeric'],
        ]);

        $houseOwner = house_owner::where('user_id', Auth::user()->id)->first();
        $houseOwner->phone_number = $request->input('phone_number');
        $houseOwner->cnic = $request->input('cnic');
        $houseOwner->biography = $request->input('bio');

        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/uploads/House Owner Profile', $image);
            $houseOwner->image = $image;
        }
        else
        {
            $image = 'no_file';
        }

        $houseOwner->update();
        return redirect('/ho_dashboard')->with('houseOwner', $houseOwner);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\house_owner  $house_owner
     * @return \Illuminate\Http\Response
     */
    public function show(house_owner $house_owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\house_owner  $house_owner
     * @return \Illuminate\Http\Response
     */
    public function edit(house_owner $house_owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\house_owner  $house_owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, house_owner $house_owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\house_owner  $house_owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(house_owner $house_owner)
    {
        //
    }
}
