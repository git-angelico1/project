<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
  public function test()
  {
     $name="Johny Sins";
     return view ('test.test', array("name"=>$name));
  }
}