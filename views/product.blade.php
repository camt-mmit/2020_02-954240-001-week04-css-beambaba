@extends('layouts.main')

@section('name', 'Natnicha')
@section('title', $productView['productName'])

@section('content')
<p>
  <img src="{{ asset('images/products/'.$productView['productCode'].'.jpg') }}"
     alt="The image of {{ $productView['productName'] }}"
     class="center" />
</p>
<p>
  <b>Code:</b> <em class="green">{{ $productView['productCode'] }}</em> <br>
  <b>Category:</b>
  <span style="color: blue;">
    <a id="org" href="{{ route('category', ['category' => $productView['categoryCode'] ]) }}">
      {{ $productView['categoryName'] }}
    </a>
  </span> <br>
  <b>Name:</b> {{ $productView['productName'] }}
  <p>{{ $productView['productDesc'] }}</p>
</p>
@endsection