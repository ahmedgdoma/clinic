@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row">
        <h2>complete your profile</h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::model($patient, ['route' => 'submitCompleteProfile', 'method'=>'post']) !!}
            {!! Form::token()!!}
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name')!!}
                    {!! Form::text('first_name', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail Address')!!}
                    {!! Form::email('email', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birth_date', 'Birth Date')!!}
                    {!! Form::date('birth_date', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('country', 'country')!!}
                    {!! Form::text('country', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Pain', 'Pain')!!}
                    {!! Form::select('pain_id',$pains, null, ['class'=>"form-control", 'placeholder' =>'select pain']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name')!!}
                    {!! Form::text('last_name', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mobile', 'Mobile')!!}
                    {!! Form::text('mobile', null, ['class'=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('gender', 'gender')!!}
                    {!! Form::select('gender',['male'=>'male', 'female' => 'female'], null, ['class'=>"form-control", 'placeholder' =>'select pain']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('occupation', 'occupation')!!}
                    {!! Form::text('occupation', null, ['class'=>"form-control"]) !!}
                </div>
            </div>
            <div class="col-xs-12">
                {!! Form::submit('submit', ['class' => 'btn btn-block btn-success']) !!}
            </div>


            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
