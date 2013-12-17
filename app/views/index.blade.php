@extends('master')

@section('container')
    <h1>Hello from blades</h1>
    {{ Form::open(array('url' => '/')) }}
        {{ Form::label('url', 'URL') }}
        {{ Form::text('url') }}
        {{ Form::submit('Submit') }}
    {{ Form::close() }}
@endsection