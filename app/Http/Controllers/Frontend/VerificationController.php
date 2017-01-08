<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Peserta;

class VerificationController extends WebarqController
{
  public function __construct(Peserta $model)
  {
    parent::__construct();
    $this->model = $model;
  }
  public function index(Request $request, $code){
    $model = $this->model->where('verification_code','=',$code)->firstOrFail();
    return view('register.verification',[
      'model' => $model,
    ]);
  }
  public function submit(Requests\Frontend\VerificationRequest $request,$code){
    try{
      $inputs = $request->all();
      $model = $this->model->where('verification_code','=',$code)->firstOrFail();
      $inputs['slip'] = $this->handleUpload($request,$model,'slip');
      $model->slip = $inputs['slip'];
      $model->save();
      return redirect('uploaded');
    } catch(\Exception $e){
      return view('register.fail',[
        'error' => $e->getMessage(),
      ]);
    }
  }
}
