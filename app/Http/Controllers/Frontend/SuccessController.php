<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuccessController extends Controller
{
  public function index(){
    return view('register.success');
  }
  public function uploaded(){
    return view('register.uploaded');
  }
}
