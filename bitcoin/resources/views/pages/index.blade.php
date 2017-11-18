@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    	<h1>Welcome to $bitCoin</h1>
    	<p>This is made as Laravel Exercise :)</p>
    	@guest
    		<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    	@else
    		<p>Enjoy the project {{ Auth::user()->name }}</p>
    	@endguest

    </div>
@endsection