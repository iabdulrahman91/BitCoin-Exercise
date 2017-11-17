@extends('layouts.app')

@section('content')
    <h1>Price</h1>
    <p>This is the Price page</p><br>
    <div>
    	<a class="btn btn-primary btn-lg" href="/price" role="button">All coins</a>
    	<div class="jumbotron text-center">
    	<h1>Welcome to $bitCoin</h1>
    	<p>{{$title}} </p>
    	<p>
    		{{$coins}}
    	</p>
    </div>
    </div>
@endsection