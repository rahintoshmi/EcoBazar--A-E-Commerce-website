<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class CustomerController extends Controller
{
    use AuthenticatesUsers,
        RegistersUsers,
        ResetsPasswords,
        SendsPasswordResetEmails {
            // Pick credentials() from AuthenticatesUsers
            AuthenticatesUsers::credentials insteadof SendsPasswordResetEmails, ResetsPasswords;
            SendsPasswordResetEmails::credentials as passwordResetCredentials;
            ResetsPasswords::credentials as resetPasswordCredentials;
        }

    protected $redirectTo = '/my-profile';

    public function showLoginForm()
    {
        return view('auth.customLogin');
    }

    public function showRegisterForm()
    {
        return view('auth.customRegister');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function broker()
    {
        return Password::broker('customers');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ]);
    }

    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $customer = Customer::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);
        Auth::guard('customer')->login($customer);

        return to_route('customer.dashboard');

    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')
            ->scopes(['email']) // request email permission
            ->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->fields([
            'name', 'first_name', 'last_name', 'email',
        ])->user();

        $customer = Customer::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name ?? $user->nickname ?? 'FB User',
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);

        Auth::guard('customer')->login($customer);

        return to_route('customer.dashboard');
    }

    protected function resetPassword($customer, $password)
    {
        $customer->password = bcrypt($password);
        $customer->save();

        dd("Password updated for {$customer->email}");

        $this->guard()->login($customer);
    }
    function customerLogout(){
      Auth::guard('customer')->logout();
      return to_route('frontend.home');
    }
    function myDashboard(){
        return view('frontend.customer.dashboard');
    }
}
