@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if (Auth::check())
                    Welcome back, {{ Auth::user()->name }}!
                @else
                    Hello, stranger! <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a>.
                @endif


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
