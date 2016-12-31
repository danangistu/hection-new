<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Prize;

class PrizeController extends WebarqController
{
  public function __construct(Prize $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view  = 'backend.cms.prize.';
  }

  public function getIndex()
  {
    return view($this->view.'_form',[
      'model'=>$this->model->first(),
    ]);
  }

  public function postIndex(Requests\Backend\CMS\PrizeRequest $request)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model->first();
      $img_name = $model->image;
      if (isset($inputs['image'])){
        $inputs['image'] = $this->handleUpload($request,$model,'image');
      }else{
        $inputs['image'] = $img_name;
      }
      return $this->update($model,$inputs);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }
}
