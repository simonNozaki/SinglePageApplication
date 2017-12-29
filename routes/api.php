<?php

use Illuminate\Http\Request;

use App\Artist;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

  Route::post('artists/store', function(Request $request){
    $name = $request->input('name');
    $category = $request->input('category');
    $area = $request->input('area');
    $office = $request->input('office');
    $artist = DB::table('ARTIST_SET.artist_master')
          ->insertGetId([ 'name' => $name, 'category' => $category, 'area' => $area, 'office' => $office ]);
  });

  Route::post('artists/search', function(Request $request){
    $category = $request->input('category');
    $this->validate($request, [ 'category' => $category ]);
    $record = DB::table('artist_master')
              ->where('category', 'like', "%{$category}%")
              ->get();
  });

});
