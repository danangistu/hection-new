<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\About;

class AboutController extends WebarqController
{
  public function __construct(About $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view  = 'backend.cms.about.';
  }

  public function getIndex()
  {
    return view($this->view.'_form',[
      'model'=>$this->model->first(),
    ]);
  }

  public function postIndex(Requests\Backend\CMS\AboutRequest $request)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model->first();
      return $this->update($model,$inputs);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }
}
