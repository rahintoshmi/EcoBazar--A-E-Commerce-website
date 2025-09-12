<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CustomerController extends Controller
{
    use RegistersUsers,AuthenticatesUsers;
    protected $redirectTo = '/my-profile';
    function showLoginForm(){
        return view('auth.customLogin');
    }
    function showRegisterForm(){
        return view('auth.customRegister');
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }
    protected function validator(array $data){
        return Validator::make($data,[
            'name' => ['required' ,'string','max:255'],
            'email' => ['required' ,'string','max:255','email','unique:users'],
            'password' => ['required' ,'string','min:8'],

        ]);
    }
    protected function create(array $data){
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
    function googleLogin(){
        return Socialite::driver('google')->redirect();
    }
    function googleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
        $customer =  Customer::updateOrCreate([
            'email' => $user->email,
        ],[
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);
        Auth::guard('customer')->login($customer);
        return to_route('customer.dashboard');

    }
}
