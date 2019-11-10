<?php

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
use App\MyModel;

Route::get('/', function () {
  $records = MyModel::all();
  if($records->isEmpty()) {
    $model = new MyModel;
    $model->save();
  }
    return view('welcome');

});

Route::post('welcome/add', 'MyController@add');

Route::post('welcome/subtract', 'MyController@subtract');
?>
