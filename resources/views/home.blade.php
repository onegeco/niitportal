@extends('layouts.app')
@section('title', 'E-Portal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i data-feather="log-in"> </i><span>Sign Out</span></a><form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
