@extends('layouts.app')

@section('content')
    <h1>Price</h1>
    <p>These are your Favorite coins : </p><br>
    <div>
    	<div class="jumbotron text-center">
    	<!-- <h1>Welcome to $bitCoin</h1>
    	<p>Please select A coin </p>
    	<p>
    		<a class="btn btn-primary btn-lg" href="price/bitcoin" role="button">bitcoin</a>
    		<a class="btn btn-primary btn-lg" href="price/ethereum" role="button">ethereum</a>
    	</p> -->
    	@if(count($coins)>0)
    	<ul class="list-group">
	    	@foreach($coins as $coin)
	    		<li class="list-group-item">
	    			<a class="btn btn-primary btn-lg" href=price/{{$coin}} role="button">{{$coin}}</a>
	    		</li>
	    	@endforeach
    	</ul>
    	@else
    		<h2>Please Add Favorite coins from the dashboard</h2>
    		<br>
    		<br>
    		<a class="btn btn-primary btn-lg" href="/dashboard" role="button">Go To Dashboard</a>
    	@endif
    </div>
    </div>
@endsection