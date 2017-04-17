<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RestaurantController extends Controller
{
  public function index ()
    {
      //list
      //GET /Restaurants
      $restaurants = Restaurant::all();
      return Response::json($restaurants);
    }

    public function create (Request $request)
    {
      //POST /Restaurants
      //create a new Restaurant
      $restaurant = Restaurant::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /Restaurants/$id
      $restaurant = Restaurant::find($id);
      return Response::json($restaurant);
    }

    public function update (Request $request, $id)
    {
      //PUT /Restaurants/$id
      //updates a single Restaurant
      $restaurant = Restaurant::find($id);
      $restaurant->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /Restaurants/$id
      //Remove a single Restaurant

      $restaurant= Restaurant::find($id);
      $restaurant->delete();
      return Response::json(['deleted' => true]);
    }
}
