<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
  public function  index()
  {
      $stores = Store::all();
      for ($i=0; $i < count($stores); $i++) { 
          $stores[$i]->owner;
      }
      return response()->json([
          "stores" => $stores
      ],Response::HTTP_OK);
  }

  public function show($id)
  {
    $store = Store::where('id',$id)->get();
    return $store;
  }
}
