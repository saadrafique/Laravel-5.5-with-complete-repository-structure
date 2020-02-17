@extends('layouts.app')
@section('content')
    <h1>Create A New Record</h1>
    <hr/>

    
	{!! Form::open(['method'=> 'POST', 'action' =>'TestFormController@store','files' => true]) !!}

    @include('Form.form',['submitButtonText'=>'Submit'])

    {!! Form::close() !!}
    
@stop