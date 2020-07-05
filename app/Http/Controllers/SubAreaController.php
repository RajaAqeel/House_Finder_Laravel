<?php

namespace App\Http\Controllers;

use App\sub_area;
use App\city;
use Auth;
use App\data_operator;
use Illuminate\Http\Request;

class SubAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = city::all();
        return view('add-sub-area')->with('city', $city);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-sub-area');
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
        ]);

        $subArea = new sub_area;
        $subArea->name = $request->input('sub_area');
        $subArea->city_id = $request->input('city');
        $dp = data_operator::where('user_id', Auth::user()->id)->first();
        $subArea->data_operator_id = $dp->id;
        $subArea->save();
        return redirect('/add-sub-area');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sub_area  $sub_area
     * @return \Illuminate\Http\Response
     */
    public function show(sub_area $sub_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sub_area  $sub_area
     * @return \Illuminate\Http\Response
     */
    public function edit(sub_area $sub_area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sub_area  $sub_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sub_area $sub_area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sub_area  $sub_area
     * @return \Illuminate\Http\Response
     */
    public function destroy(sub_area $sub_area)
    {
        //
    }
}
