@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to your Dashboard</h1>
        <p>here you will be able to add Favorite coins to be shown in the Price page </p>
        <p>
            <a class="btn btn-primary btn-lg" href="/allcoins" role="button">SELECT YOUR FAVORITE :)</a><br><br>
            <a class="btn btn-success btn-lg" href="/price" role="button"> SEE YOUR FAVORITE :)</a>
        </p>
    </div>
@endsection