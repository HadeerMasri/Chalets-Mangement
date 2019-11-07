<?php

namespace App\Http\Controllers\Auth;

use App\Events\PusherEvent;
use App\Events\UserRegisterationEvent;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use RealRashid\SweetAlert\Facades\Alert;

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
    protected $redirectTo = '/home';

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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        event(new UserRegisterationEvent($user));
        return $user;


    }

    public function redirectPath()
    {
        // Logic that determines where to send the user
        if (Auth::user()->role_id == 2) {
            Alert::success('تم تسجيلك وتسجيل دخولك بنجاح ');
            return '/owner';
        } elseif (Auth::user()->role_id == 3) {
            Alert::success('تم تسجيلك وتسجيل دخولك بنجاح ');
            return '/tenant';
        }
    }

    public function showRegistrationForm()
    {
        $roles = Role::where('name', 'مالك')->orWhere('name', 'مستأجر')->get();
        return view('auth.register', compact('roles'));
    }
}
