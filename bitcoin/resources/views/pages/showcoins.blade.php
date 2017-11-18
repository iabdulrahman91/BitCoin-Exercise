@extends('layouts.app')

@section('content')
    <h1>All Coins</h1>
    <p>These are all available coins: </p><br>
    <a class="btn btn-primary btn-lg" href="/price" role="button">Back</a>
    <div>
    	<div class="jumbotron text-center">
    	<!-- <h1>Welcome to $bitCoin</h1>
    	<p>Please select A coin </p>
    	<p>
    		<a class="btn btn-primary btn-lg" href="price/bitcoin" role="button">bitcoin</a>
    		<a class="btn btn-primary btn-lg" href="price/ethereum" role="button">ethereum</a>
    	</p> -->
    	@if(count($myarry)>0)
    	<ul class="list-group">
	    	@foreach($myarry as $item)
	    		<li class="list-group-item">
	    			<a class="btn btn-primary btn-lg" href=price/{{$item}} role="button">{{$item}}</a>
                </li>
	    		</li>
	    	@endforeach
    	</ul>
    	@endif
    </div>
    </div>
@endsection