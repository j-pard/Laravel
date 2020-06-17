@extends('layout.app')

@section('title','Ratpi Restaurants')

@section('content')
      <h2>{{ $restaurant->name }}</h2>

      <nav>
            <a href="/restaurant">HOME</a>
      </nav>

      <ul>
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
      </ul>
      
@endsection