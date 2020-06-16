@extends('layout.app')

@section('title','Ratpi Restaurants')

@section('content')

<style>
      input {
            display: block;
            margin: 10px;
      }

</style>
      <h2>Add new restaurant to DB</h2>

      <form action="/restaurant/create" method="POST">
            {{-- Token for cross-site security --}}
            {{ csrf_field() }}
            <input type="text" name="name" id="newForm-name" placeholder="Name of the restaurant">
            <input type="text" name="adress" id="newForm-adress" placeholder="Enter adress">
            <input type="number" name="zipCode" id="newForm-zipCode" placeholder="0000">
            <input type="text" name="town" id="newForm-town" placeholder="Enter town">
            <input type="text" name="country" id="newForm-country" placeholder="Enter country">
            <textarea name="description" id="newForm-description" cols="30" rows="10" placeholder="Enter description"></textarea>
            <input type="number" name="review" id="newForm-review" min="0" max="10" step="1">
            <input type="submit" value="Save">
      </form>
      
@endsection