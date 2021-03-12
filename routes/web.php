<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


*/
//
// Route::get('/', function () {
//     return view('homepage');
// });
//
// Route::get('/product/{id}', function($id) {
//     return view('product',
//         ['idProduct' => $id]
//     );
// });
//


Route::get('/', function() {
  $pastaArray = config('dati-pasta');

  return view('homepage',[
    'datiPasta' => $pastaArray
  ]);

});



Route::get('/product/{id?}', function($id=null) {
  $pastaArray = config('dati-pasta' );
  if(empty($id)) {
    return redirect('/');
  }
  if($id > count($pastaArray)){
    abort(404);
  }
  return view('product',
  ['datiPasta' => $pastaArray],
   ['idProduct' => $id]);

});
