@extends('layout.app')

@section('title','Ratpi Restaurants')

@section('content')
      <h1>Our Restaurants !</h1>
      
            @foreach ($restaurants as $restaurant)
                  <ul>
                        <li>
                              <h2>{{ $restaurant->name }}</h2>
                        </li>
                        <li><strong>{{ $restaurant->country }}</strong>, 
                              {{ $restaurant->adress }}, {{ $restaurant->zipCode }} {{ $restaurant->town }}
                        </li>
                        <li>Review : {{ $restaurant->review }}</li>
                        <li>
                              <blockquote>
                                    {{ $restaurant->description }}
                              </blockquote>
                        </li>
                        <li>Last edit : {{ $restaurant->updated_at }}</li>
                  </ul>
            @endforeach
@endsection