@extends('layouts.app')
@section('content')
    <h1>Detail of {{$form->store}}</h1>
    <hr/>
	
	 
    <img height="80" width="80" src="{{$form->photo}}"><hr>
   	<b>Title:</b>{{$form->title}}<hr>
   	<b>Title Sufix:</b>{{$form->title_suffix}}<hr>
   	<b>Coupon Code:</b>{{$form->coupon_code}}<hr>
   	<b>Affiliated Url:</b>{{$form->aff_url}}<hr>
   	<b>Start Date:</b>{{$form->start_date}}<hr>
   	<b>End Date:</b>{{$form->end_date}}<hr>
    <a class="btn btn-default" href="/">Go Back To List</a>
@stop