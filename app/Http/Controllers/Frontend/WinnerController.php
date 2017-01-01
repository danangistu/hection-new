<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Winner;
class WinnerController extends Controller
{
  public function viewWinner(Request $request,$id){
    $win = Winner::findOrFail($id);
    return view('frontend.winner',[
      'win' => $win
    ]);
  }
}
