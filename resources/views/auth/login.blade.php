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
                    <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4>Sign in to E-Portal</h4>
                        <p>Enter your Login ID</p>
                        <div class="form-group">
                            <label class="col-form-label">Login ID</label>
                            <input class="form-control @error('reg_id') is-invalid @enderror" value="{{ old('reg_id') }}" type="text" required="" placeholder="" name="reg_id">
                            @error('reg_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="">
                            <div class="show-hide"><span class="show"></span></div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                        <p class="mt-4 text-center mb-0">Powered by <a class="" href="https://onegeco.com" target="_blank">OneGeco Systems</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
