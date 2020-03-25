<?php

namespace App\Http\Controllers;

use App\service_owner;
use Illuminate\Http\Request;
use Auth;

class ServiceOwnerController extends Controller
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
        return view('service-provider-profile');
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

        $sp = service_owner::where('user_id', Auth::user()->id)->first();
        $sp->phone_number = $request->input('phone_number');
        $sp->biography = $request->input('bio');
        $sp->update();
        return redirect('/sp_dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service_owner  $service_owner
     * @return \Illuminate\Http\Response
     */
    public function show(service_owner $service_owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service_owner  $service_owner
     * @return \Illuminate\Http\Response
     */
    public function edit(service_owner $service_owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service_owner  $service_owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service_owner $service_owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service_owner  $service_owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(service_owner $service_owner)
    {
        //
    }
}
