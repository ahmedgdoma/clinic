@extends('layouts.layout')

@section('content')

    @if (Route::has('login'))
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @auth
                        <h2 class="lead">welcome in the clinic website {{ \Illuminate\Support\Facades\Auth::user()->username }}</h2>
                    @else
                        <h2 class="lead">welcome in the clinic website</h2>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endif
@endsection


