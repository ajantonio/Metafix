<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name' => ['required', 'string', 'max:255',],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'orthopedic_license_number' => ['string', 'max:20'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'email' => ['nullable', 'email', 'max:255', 'unique:users'],
            'contact_number' => ['required' , 'string', 'max:11', 'unique:users'],
            'password' => ['required', 'confirmed', 'different:username', 'different:email', 'different:contact_number', 'min:8'],
            'type' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create($user)
    {
        $newUser = User::create([
            'username' => $user['username'],
            'first_name' => $user['first_name'],
            'middle_name' => $user['middle_name'], 
            'last_name' => $user['last_name'],
            'orthopedic_license_number' => $user['orthopedic_license_number'] ?? null,
            'email' => $user['email'],
            'contact_number' => $user['contact_number'],
            'password' =>  Hash::make($user['password']), // default hash of laravel is bcrypt($user['password'])
            'is_admin' => $user['type'] == 'admin' ? 1 : 0,
            'status_id' => 1   
        ]);

        // notify admin on user account creation

        return $newUser;
    }
}
