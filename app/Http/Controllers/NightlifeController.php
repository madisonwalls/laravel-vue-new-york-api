<?php

namespace App\Http\Controllers;

use App\Nightlife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class NightlifeController extends Controller
{
  public function index ()
    {
      //list
      //GET /Nightlifes
      $Nightlifes = Nightlife::all();
      return Response::json($Nightlifes);
    }

    public function create (Request $request)
    {
      //POST /Nightlifes
      //create a new Nightlife
      Nightlife::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /Nightlifes/$id
      $Nightlife = Nightlife::find($id);
      return Response::json($Nightlife);
    }

    public function update (Request $request, $id)
    {
      //PUT /Nightlifes/$id
      //updates a single Nightlife
      $Nightlife = Nightlife::find($id);
      $Nightlife = $Nightlife->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /Nightlifes/$id
      //Remove a single Nightlife

      $Nightlife= Nightlife::find($id);
      $Nightlife->delete();
      return Response::json(['deleted' => true]);
    }
}
