@extends('layouts.app')
@section('title', 'E-Portal')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5">
            <img class="bg-img-cover bg-center" src="{{asset('/images/login/4.jpg')}}" alt="NIIT" style="background-position: left center !important">
        </div>
        <div class="col-xl-7 p-0">    
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo text-start" href="https://niit-enugu.com">
                            <img class="img-fluid for-light" src="{{asset('/images/logo/login.png')}}" alt="NIIT">
                        </a>
                    </div>
                    <div class="login-main">
                        <h4>Sign in to E-Portal</h4>
                        <p>Enter your Login ID</p>
                        
                        <div class="form-group mt-4">
                            <a href="{{ route('login')}}" class="btn btn-primary btn-block">Go to Login</a>
                        </div>
                        <p class="mt-4 text-center mb-0">Powered by <a class="" href="https://onegeco.com" target="_blank">OneGeco Systems</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
