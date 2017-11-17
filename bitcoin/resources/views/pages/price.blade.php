@extends('layouts.app')

@section('content')
    <h1>Price</h1>
    <p>This is the Price page</p><br>
    <div>
    	<a class="btn btn-primary btn-lg" href="/price" role="button">All coins</a>
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
    	@endif
    </div>
    </div>
@endsection