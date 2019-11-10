<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyModel;

class MyController extends Controller
{
    public function add(){
      $model = MyModel::find(1);
      $model->number +=1;
      $model->save();
      return view('welcome');
    }

    public function subtract(){
      $model = MyModel::find(1);
      $model->number -=1;
      $model->save();
      return view('welcome');
    }
}
