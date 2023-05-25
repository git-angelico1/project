<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Midterm extends Controller
{
    
    public function mid1(Request $request)
    {

    return view('Loginform');
}
    public function mid2(){
    return redirect()->route('success');
}
    }