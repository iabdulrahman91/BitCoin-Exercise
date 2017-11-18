@extends('layouts.app')

@section('content')
    <h1>Price</h1>
    <p>This is the coin info page</p><br>
    <div>
        <div>
            <p>Coin name : {{$coinDetails->name}}</p><br><br>

            <p id="price">Price in USD : {{$coinDetails->price_usd}}</p><br>
            
            <button type="button" onclick="document.getElementById('price').innerHTML = 'Price in USD : {{$coinDetails->price_usd}}'">Price in USD</button>
            <button type="button" onclick="document.getElementById('price').innerHTML = 'Price in BTC : {{$coinDetails->price_btc}}'">Price in BTC</button><br><br>

            <p id="change">Percent Change 1h : {{$coinDetails->percent_change_1h}}</p><br>
            
            <button type="button" onclick="document.getElementById('change').innerHTML = 'Percent Change 1h : {{$coinDetails->percent_change_1h}}'">1 hour </button>
            
            <button type="button" onclick="document.getElementById('change').innerHTML = 'Percent Change 24h : {{$coinDetails->percent_change_24h}}'">24 hours</button>
            
            <button type="button" onclick="document.getElementById('change').innerHTML = 'Percent Change 24h : {{$coinDetails->percent_change_7d}}'">7 days</button>
            <br>
            <div>
                
                <p></p>
            </div>
        </div><br>
    	<a class="btn btn-primary btn-lg" href="/price" role="button">Back</a> <a class="btn btn-success btn-lg" href="/add/{{$coinDetails->name}}" role="button">&hearts;</a>
    	<div class="jumbotron text-center">
    	<p>{{$coinDetails->name}} Details :</p>
    	<p>
    		@if(count($coinDetails)>0)
            <ul class="list-group">
                @foreach($coinDetails as $item)
                    <li class="list-group-item">
                        {{$item}}
                    </li>
                @endforeach
            </ul>
            @endif
    	</p>
        </div>

        
    </div>
@endsection