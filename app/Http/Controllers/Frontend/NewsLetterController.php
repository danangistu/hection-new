<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Mail;
class NewsLetterController extends Controller
{
  public function store(Request $request){
    $email     = $request->input('email');
    try{
      $cek = Newsletter::whereEmail($email)->count();
      if($cek < 1){
        Mail::send('frontend.email',[
            'email'   => $email
          ],
        function($m) use($email){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject('Thank You for Subscribe');
            $m->to($email);
        });

        $submit = new Newsletter;
        $submit->email = $email;
        $submit->save();
        echo "SUCCESS";

      }else{
        echo "EXIST";
      }
    }catch (\Exception $e){
      echo $e->getMessage();
    }
  }
}
