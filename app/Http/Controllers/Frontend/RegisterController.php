<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
  public function index(){
    return view('frontend.register');
  }
  public function store(Request $request){

  }
}
