<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = \App\Restaurant::get();
        return view('posts.index', compact('restaurants'));
        //dd($restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'adress' => 'required|min:5|max:255',
            'zipCode' => 'required|min:1|max:6',
            'town' => 'required|min:5|max:255',
            'country' => 'required|min:5|max:255',
            'description' => 'max:400',
            'review' => 'max:2',
        ]);

        \App\Restaurant::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = \App\Restaurant::findOrFail($id);
        return view('posts.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = \App\Restaurant::findOrFail($id);
        return view('posts.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'adress' => 'required|min:5|max:255',
            'zipCode' => 'required|min:1|max:6',
            'town' => 'required|min:5|max:255',
            'country' => 'required|min:5|max:255',
            'description' => 'max:400',
            'review' => 'max:2'
        ]);

        $restaurant = \App\Restaurant::where('id', $id)
            ->update($validatedData);

        $restaurant = \App\Restaurant::findOrFail($id);
        return view('posts.show', compact('restaurant'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
