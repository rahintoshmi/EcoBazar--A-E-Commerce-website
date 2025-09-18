@extends('layouts.frontendlayout')
@section('main')
<div class="col-lg-6 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3">Reset Your Password</h4>
            <form method="POST" action="{{ route('customer.password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

    <input type="password" name="password" placeholder="New Password"
           class="form-control my-3" required>
    <input type="password" name="password_confirmation" placeholder="Confirm New Password"
           class="form-control my-3" required>

    <button type="submit" class="btn btn-primary w-100">
        Reset Password
    </button>
    <hr>
            <div class="text-center">
                <a class="text-dark" href="{{ route('customer.login') }}">Back to Login</a>
            </div>
</form>

        </div>
    </div>
</div>
@endsection
