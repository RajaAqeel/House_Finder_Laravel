<?php

namespace App\Http\Controllers;

use App\users;
use App\house_owner;
use App\data_operator;
use App\service_owner;
use App\admin;
use Illuminate\Http\Request;
use Auth;
use DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminData()
    {
        $admin = admin::where('user_id', Auth::user()->id)->first();
        $user = users::where('id', Auth::user()->id)->first();
        return view('admin-view-profile')->with('user', $user)->with('admin', $admin);
    }

    public function houseOwnerData()
    {
        $houseOwner = house_owner::where('user_id', Auth::user()->id)->first();
        $user = users::where('id', Auth::user()->id)->first();
        return view('house-owner-view-profle')->with('user', $user)->with('houseOwner', $houseOwner);
    }

    public function serviceProviderData()
    {
        $serviceOwner = service_owner::where('user_id', Auth::user()->id)->first();
        $user = users::where('id', Auth::user()->id)->first();
        return view('service-provider-view-profile')->with('user', $user)->with('serviceOwner', $serviceOwner);
    }

    public function dataOperatorData()
    {
        $dataOperator = data_operator::where('user_id', Auth::user()->id)->first();
        $user = users::where('id', Auth::user()->id)->first();
        return view('data-operator-view-profile')->with('user', $user)->with('dataOperator', $dataOperator);
    }

    public function allUsers()
    {
        $allUsers = users::where('user_type','admin')->where('user_type','House Owner')->where('user_type','Service Provider')->where('user_type','Data Operator');
        return view('all-registered-users')->with('allUsers', $allUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        DB::table('admins')->where('user_id', $id)->delete();
        return redirect('/all-registered-users'); 

    }
}
