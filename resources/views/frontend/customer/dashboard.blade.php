@extends('layouts.frontendlayout')
@section('main')
<div class="container my-5">
    <div class="card">
        <div class="card-body py-0">
            <div class="row">
                <div class="col-lg-3 p-3" style="border-right: 1px solid #ddd;">
                    <ul>
                        <li style="border-bottom: 1px solid #ddd"><a class="py-3 text-black d-block" href="#">Dashboard</a></li>
                        <li style="border-bottom: 1px solid #ddd"><a class="py-3 text-black d-block" href="#">My Orders</a></li>
                        <li style="border-bottom: 1px solid #ddd"><a class="py-3 text-black d-block" href="#">Profile</a></li>
                        <li style="border-bottom: 1px solid #ddd"><a class="py-3 text-black d-block" href="#">Settings</a></li>
                        <li style="border-bottom: 1px solid #ddd"><a class="py-3 text-black d-block" href="{{ route('customer.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <h2>Welcome to our dashboard {{ auth('customer')->user()->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
