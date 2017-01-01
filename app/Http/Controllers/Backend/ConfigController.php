<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Config;

class ConfigController extends WebarqController
{
  public function __construct(Config $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view  = 'backend.setting.config.';
  }

  public function getIndex()
  {
    return view($this->view.'_form',[
      'model'=>$this->model->first(),
    ]);
  }

  public function postIndex(Requests\Backend\Setting\ConfigRequest $request)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model->first();
      $img_name = $model->image;
      if (isset($inputs['image'])){
        $inputs['image'] = $this->handleUpload($request,$model,'image',[120,53]);
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
