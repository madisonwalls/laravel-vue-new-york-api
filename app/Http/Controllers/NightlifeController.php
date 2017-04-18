<?php

namespace App\Http\Controllers;

use App\Crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CrimeController extends Controller
{
  public function index ()
    {
      //list
      //GET /Crimes
      $Crimes = Crime::all();
      return Response::json($Crimes);
    }

    public function create (Request $request)
    {
      //POST /Crimes
      //create a new Crime
      $crime = Crime::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /Crimes/$id
      $crime = Crime::find($id);
      return Response::json($crime);
    }

    public function update (Request $request, $id)
    {
      //PUT /Crimes/$id
      //updates a single Crime
      $crime = Crime::find($id);
      $crime->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /Crimes/$id
      //Remove a single Crime

      $crime= Crime::find($id);
      $crime->delete();
      return Response::json(['deleted' => true]);
    }
}
