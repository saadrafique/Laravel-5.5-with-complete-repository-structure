@extends('layouts.app')
@section('content')
    <h1>Listed Records</h1>
    <hr/>

    <a class="btn btn-primary" href="/form">Create  New</a>
    <hr>
    <div class="row" >
			<div class="col-md-2" ><b>Store</b></div>
			<div class="col-md-2" ><b>Title</b></div>
			<div class="col-md-3" ><b>Affiliated url</b></div>
			<div class="col-md-2" ><b>Details</b></div>
			<div class="col-md-2" ><b>Action</b></div>
		</div>
		<hr>
    @foreach($form as $f)
		<div class="row" >
			<div class="col-md-2" >{{$f->store}}</div>
			<div class="col-md-2" >{{$f->title}}</div>
			<div class="col-md-3" >{{$f->aff_url}}</div>
			<div class="col-md-2" ><a class="btn btn-default"  href="/detail/{{$f->id}}">Detail</a></div>
			<div class="col-md-3" ><a class="btn btn-danger" href="/delete/{{$f->id}}">Delete</a> <a class="btn btn-primary" href="/edit/{{$f->id}}">Edit</a></div>
		</div>
		<hr>
    @endforeach
@stop