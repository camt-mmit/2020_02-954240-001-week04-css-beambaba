@extends('layouts.main')

@section('name', 'Natnicha')
@section('title', 'Categories')

@section('content')
  <table>
    <caption>Category List</caption>
    <thead>
      <tr>
        <th>Code</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          <td>
            <a id="org" href="{{ route('category', ['category' => $category['code']]) }}">
            {{ $category['code'] }}
            </a>
          </td>
          <td id="org" >{{ $category['name'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection