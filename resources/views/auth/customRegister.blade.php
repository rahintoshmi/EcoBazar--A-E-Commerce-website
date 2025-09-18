@extends('layouts.frontendlayout')
@section('main')
    <div class="col-lg-6 mx-auto my-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customer.register.confirm') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="" placeholder="User Name" class="form-control my-3">
                    <input type="text" name="email" id="" placeholder="Email" class="form-control my-3">
                    <input type="password" name="password" id="" placeholder="Password" class="form-control my-3">
                    <button class="btn btn-primary" style="width: 100%; justify-content:center;border-radius:5px;">Sign
                        Up</button>
                    <div class="row align-items-center my-2">
                        <a href="{{ route('google.login') }}" class="col-lg-6"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4vsLe2fHCW4ksa6P1BMOu04u7bCNH3Cgr6w&s"
                                alt="" style="width: 300px"></a>
                        <a href="{{ route('facebook.login') }}" class="col-lg-6"><img
                                src="https://www.freeiconspng.com/uploads/facebook-login-button-png-14.png" alt=""
                                style="width: 500px;height:71px" class="img-fluid"></a>
                    </div>
                    <hr>
                    <div class="text-center"><a class="text-dark" href="{{ route('customer.login') }}">Login</a></div>
                </form>
            </div>
        </div>

    </div>
@endsection
