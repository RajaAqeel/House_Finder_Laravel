<?php

namespace App\Http\Controllers;

use App\house_owner;
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
        return view('data-operator-profile');
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
            'phone_number' => 'required',
            'bio' => 'required',
        ]);

        $houseOwner = house_owner::where('user_id', Auth::user()->id)->first();
        $houseOwner->phone_number = $request->input('phone_number');
        $house_owner->cnic = $request->input('cnic');
        $houseOwner->biography = $request->input('bio');
        $houseOwner->update();
        return redirect('/ho_dashboard');
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
