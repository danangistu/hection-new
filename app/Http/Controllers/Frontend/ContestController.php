<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contest;
class ContestController extends Controller
{
  public function viewContest(Request $request, $id){
    $con = Contest::findOrFail($id);
    return view('frontend.contest',[
      'con' => $con
    ]);
  }
}
