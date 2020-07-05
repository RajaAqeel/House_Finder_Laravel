<?php

namespace App\Http\Controllers;

use App\data_operator;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;


class DataOperatorController extends Controller
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
        $city = city::all();
        return view('data-operator-profile')->with('city', $city);
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

        $dataOperator = data_operator::where('user_id', Auth::user()->id)->first();
        $dataOperator->phone_number = $request->input('phone_number');
        $dataOperator->biography = $request->input('bio');
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/uploads/House Owner Profile', $image);
            $dataOperator->image = $image;
        }
        else
        {
            $image = 'no_file';
        }
        $dataOperator->update();
        return redirect('/do_dashboard')->with('dataOperator', $dataOperator);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\data_operator  $data_operator
     * @return \Illuminate\Http\Response
     */
    public function show(data_operator $data_operator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data_operator  $data_operator
     * @return \Illuminate\Http\Response
     */
    public function edit(data_operator $data_operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data_operator  $data_operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_operator $data_operator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data_operator  $data_operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_operator $data_operator)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerPage()
    {
        return view('add-data-operator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $user = new users;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->user_type = $request->input('user_type');
        $user->save();
        $sp = new data_operator;
        $sp->user_id = Auth::user()->id;
        $sp->save();
        return redirect('/dashboard');
    }

 
}
