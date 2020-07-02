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
            'phone_number' => ['required', 'regex:/^[0-9]+$/', 'digits_between:11,11', 'numeric'],
            'bio' => ['required'],
        ]);

        $serviceOwner = service_owner::where('user_id', Auth::user()->id)->first();
        $serviceOwner->phone_number = $request->input('phone_number');
        $serviceOwner->biography = $request->input('bio');
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/uploads/Services Owner Profile', $image);
            $serviceOwner->image = $image;
        }
        else
        {
            $image = 'no_file';
        }
        $serviceOwner->update();
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
