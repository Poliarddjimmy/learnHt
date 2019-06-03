<?php

namespace learnHt\Http\Controllers\Auth;

use learnHt\User;
use learnHt\cv;
use learnHt\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'pseudo' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \learnHt\User
     */
    protected function create(array $data)
    {
       $data['code'] = 'H_'.date('y').'_'.sprintf("%03d", User::all()->count() + 1);
        $vag = User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'pseudo'        => $data['pseudo'],
            'email'         => $data['email'],
            'code'          => $data['code'],
            'remember_token'=> str_random(10),
            'password'      => Hash::make($data['password']),
        ]);


        $user = user::where('email', $data['email'])->first();
        cv::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'pseudo'        => $data['pseudo'],
            'email'         => $data['email'], 
            'user_id'          => $user['id'],
        ]);

        return $vag;
    }
}
