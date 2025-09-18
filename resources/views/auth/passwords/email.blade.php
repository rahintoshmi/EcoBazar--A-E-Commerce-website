@extends('layouts.frontendlayout')
@section('main')
<div class="col-lg-6 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3">Forgot Password?</h4>
            <form method="POST" action="{{ route('customer.password.email') }}">
                @csrf
                <input type="email" name="email" placeholder="Enter your email"
                       class="form-control my-3" required>
                <button type="submit" class="btn btn-primary w-100">
                    Send Reset Link
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="text-dark" href="{{ route('customer.login') }}">Back to Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
