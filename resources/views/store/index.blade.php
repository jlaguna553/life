@extends('store.template')

@section('content')
	<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">FLORERIA</span> LIFE</span>
  </div>
</div>
	<div class="products">
		@foreach($products as $product)
			<div class="product card">
				<h3>{{ $product->name }}</h3>
				<img src="{{$product->image}}" width="200" alt="">
				<div class="product-info">
					<p> {{ $product->extract }} </p>
					<p> {{ number_format($product->price, 2) }} </p>
					<p>
						<a href="#">Lo quiero</a>
						<a href="{{ route('product-detail', $product->slug) }}">Leer mas</a>
					</p>
				</div>
			</div>
		
		@endforeach

	</div>
	
@stop
