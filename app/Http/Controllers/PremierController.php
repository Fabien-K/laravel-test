<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


Class PremierController extends Controller {
  public function home($name){
    $transformed = strtoupper($name);
    return view('home', [
      'name'=> $transformed
    ]);
  }
  public function second(){
    $age = 36;
    return view('second', [      
        'age'=> $age  
    ]);
  }
}