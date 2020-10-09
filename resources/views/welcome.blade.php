@extends('layouts.layout')

@section('content')

    @if (Route::has('login'))
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @auth
                        <h2 class="lead">
                            welcome in the clinic website
                            <span class="text-danger">{{ \Illuminate\Support\Facades\Auth::user()->username }}</span>
                        </h2>
                        {!! Form::open(['route' => 'logout', 'method'=>'post']) !!}
                        {!! Form::token()!!}
                        {!! Form::submit('Log out', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

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


