@extends('layouts.app')
@section('content')
<h1>Edit:{!! $form->store !!}</h1>
<hr/>
{!! Form::model($form ,['method'=>'PATCH','files' => true,'action'=>['TestFormController@update',$form->id]]) !!}
@include('Form.form' ,['submitButtonText'=>'Update Record'])
{!! Form::close() !!}



    @stop

