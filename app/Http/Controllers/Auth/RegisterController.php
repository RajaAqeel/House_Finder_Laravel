<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\admin;
use App\house_owner;
use App\data_operator;
use App\service_owner;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if(Auth::user()->user_type == 'admin')
        {
            $sp = new admin;
            $sp->user_id = Auth::user()->id;
            $sp->save();
            return 'dashboard';
        }
        else if(Auth::user()->user_type == 'House Owner')
        {
            $sp = new house_owner;
            $sp->user_id = Auth::user()->id;
            $sp->save();
            return 'ho_dashboard';
        }
        else if(Auth::user()->user_type == 'Service Provider')
        {
            $sp = new service_owner;
            $sp->user_id = Auth::user()->id;
            $sp->save();
            return 'sp_dashboard';
        }
        else if(Auth::user()->user_type == 'Data Operator')
        {
            $sp = new data_operator;
            $sp->user_id = Auth::user()->id;
            $sp->save();
            return 'do_dashboard';
        }
        else
        {
            return 'home';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $data['user_type'],
        ]);
    }
}
