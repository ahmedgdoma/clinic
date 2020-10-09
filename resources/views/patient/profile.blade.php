@extends('layouts.layout')

@section('content')

<div class="container text-center">

    <h1>welcome in your profile</h1>

    <div class="row">
        <div class="col-xs-12">
            <table class="table table-responsive">
                @foreach($data as $key => $val)
                    @if(strpos($key, 'id') === false && !is_null($val))
                        <tr>
                            <th>{{ $key }}</th>
                            <td>{{ $val }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
            <a class="btn btn-primary" href="{{ route('completeProfile') }}">update profile</a>
        </div>
    </div>
</div>
@endsection
