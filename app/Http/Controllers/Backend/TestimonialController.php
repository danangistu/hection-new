<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Testimonial;
use Table;
use File;

class TestimonialController extends WebarqController
{
  public function __construct(Testimonial $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view = 'backend.cms.testimonial.';
  }

  public function getData()
  {
    $model = $this->model->select('id','image','testimonial','name','role');

    $table = Table::of($model)
    ->addColumn('image', function($model){
      return \Html::image('contents/'.$model->image,'Picture',array('height'=>100));
    })
    ->addColumn('action',function($model){
      $status = $model->status == 'y' ? true : false;
      return \webarq::buttons($model->id , [] , $status);
    })
    ->make(true);

    return $table;
  }

  public function getIndex()
  {
    return view($this->view.'index');
  }

  public function getCreate()
  {
    return view($this->view.'_form',[
      'model'=>$this->model,
    ]);
  }

  public function postCreate(Requests\Backend\CMS\TestimonialRequest $request)
  {
    try{
      $inputs = $request->all();
      $model = $this->model;
      $inputs['image'] = $this->handleUpload($request,$model,'image',[100,100]);
      return $this->save($model,$inputs);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }

  public function getUpdate($id)
  {
    return view($this->view.'_form',[
      'model'=>$this->model->findOrFail($id),
    ]);
  }

  public function postUpdate(Requests\Backend\CMS\TestimonialRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model = $this->model->findOrFail($id);
      $img_name = $model->image;
      if (isset($inputs['image'])){
        $inputs['image'] = $this->handleUpload($request,$model,'image',[100,100]);
      }else{
        $inputs['image'] = $img_name;
      }
      return $this->update($model,$inputs);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }

  public function getDelete($id)
  {
    try{
      $model = $this->model->findOrFail($id);
      File::delete('contents/'.$model->image);
      return $this->delete($model);
    }catch(\Exception $e){
      echo $e->getMessage();
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }

  public function getView($id)
  {
    $menu = injectModel('Menu');
    return view($this->view.'view',compact('model','menu'),[
      'model'=>$this->model->findOrFail($id),
    ]);
  }
}
