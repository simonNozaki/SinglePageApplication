<?php

use Illuminate\Http\Request;

use App\Artist;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function(){

  Route::get('artists', function(){
    $artists = Artist::all();
    return $artists;
  });

  Route::get('artists/show/{id}', function($id){
    $artist = DB::table('artist_master')
          ->where('artist_id', '=', $id)
          ->get();
    return $artist;
  });
  
});
