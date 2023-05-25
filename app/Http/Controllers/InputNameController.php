<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{
    public function show(Request $request)
    {
       $name = $request->input('InputName');
       if ($name < 15 ){
           $mess = "You are not eligible to vote";
       }elseif ($name < 18 ){
          $mess = "You are eligible in SK vote ";
       }else {
          $mess = "You are eligible to vote";
       }
return view('InputName', ['name' => $name, 'mess' => $mess]);    
    }

}