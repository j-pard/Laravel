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
                        <li>Review : {{ $restaurant->review }}/10</li>
                        <li>
                              <blockquote>
                                    {{ $restaurant->description }}
                              </blockquote>
                        </li>
                        <li>Last edit : {{ $restaurant->updated_at }}</li>
                        <li><a href="/restaurant/show/{{ $restaurant->id }}">Show this restaurant</a></li>
                  </ul>
            @endforeach
@endsection