<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use users;
use Auth;

class ChangePasswordController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordPageAdmin()
    {
        return view('change-password-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordAdmin(Request $request)
    {
        $user = users::where('id', Auth::user()->id);
        $user->password = Hash::make($request->input('password'));
        $user->update();
        return redirect('/dashboard');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordPageSp()
    {
        return view('change-password-sp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordSp(Request $request)
    {
        $user = users::where('id', Auth::user()->id);
        $user->password = Hash::make($request->input('password'));
        $user->update();
        return redirect('/sp_dashboard');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordPageDo()
    {
        return view('change-password-do');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordDo(Request $request)
    {
        $user = users::where('id', Auth::user()->id);
        $user->password = Hash::make($request->input('password'));
        $user->update();
        return redirect('/do_dashboard');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordPageHo()
    {
        return view('change-password-ho');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ChangePasswordHo(Request $request)
    {
        $user = users::where('id', Auth::user()->id);
        $user->password = Hash::make($request->input('password'));
        $user->update();
        return redirect('/ho_dashboard');
    }
}
