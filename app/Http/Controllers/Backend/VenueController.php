<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Venue;

class VenueController extends WebarqController
{
  public function __construct(Venue $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view  = 'backend.cms.venue.';
  }

  public function getIndex()
  {
    return view($this->view.'_form',[
      'model'=>$this->model->first(),
    ]);
  }

  public function postIndex(Requests\Backend\CMS\VenueRequest $request)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model->first();
      $img_name = $model->image;
      if (isset($inputs['image'])){
        $inputs['image'] = $this->handleUpload($request,$model,'image',[150,150]);
      }else{
        $inputs['image'] = $img_name;
      }
      $img_name = $model->banner;
      if (isset($inputs['banner'])){
        $inputs['banner'] = $this->handleUpload($request,$model,'banner',[1200,500]);
      }else{
        $inputs['banner'] = $img_name;
      }
      return $this->update($model,$inputs);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }
}
