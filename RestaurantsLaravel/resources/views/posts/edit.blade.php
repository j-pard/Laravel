@extends('layout.app')

@section('title','Ratpi Restaurants')

@section('content')
<style>
      input {
            display: block;
            margin: 10px;
      }
</style>

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
      
      <h3>What do you want to change ?</h3>

      <!-- Create Post Form -->
      <form action="/restaurant/edit/{{ $restaurant->id }}" method="POST">
            {{-- Token for cross-site security --}}
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <input type="text" name="name" id="newForm-name" placeholder="Name of the restaurant" value="{{ $restaurant->name }}">
            <input type="text" name="adress" id="newForm-adress" placeholder="Enter adress" value="{{ $restaurant->adress }}">
            <input type="number" name="zipCode" id="newForm-zipCode" placeholder="0000" value="{{ $restaurant->zipCode }}">
            <input type="text" name="town" id="newForm-town" placeholder="Enter town" value="{{ $restaurant->town }}">
            <input type="text" name="country" id="newForm-country" placeholder="Enter country" value="{{ $restaurant->country }}">
            <textarea name="description" id="newForm-description" cols="30" rows="10" placeholder="Enter description">{{ $restaurant->description }}</textarea>
            <input type="number" name="review" id="newForm-review" min="0" max="10" step="1" value="{{ $restaurant->review }}">
            <input type="submit" value="Update">
      </form>
      

      <!-- Erros Handling -->
      @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
            </ul>
      </div>
      @endif
@endsection