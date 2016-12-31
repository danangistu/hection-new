<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Contest;
use Table;
use File;

class ContestController extends WebarqController
{
  public function __construct(Contest $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view = 'backend.cms.contest.';
  }

  public function getData()
  {
    $model = $this->model->select('id','image','title','sub_title','order')->orderBy('order');

    $table = Table::of($model)
    ->addColumn('image', function($model){
      return \Html::image('contents/'.$model->image,'Picture',array('height'=>150));
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

  public function postCreate(Requests\Backend\CMS\ContestRequest $request)
  {
    try{
      $inputs = $request->all();
      $model = $this->model;
      $inputs['image'] = $this->handleUpload($request,$model,'image',[350,350]);
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

  public function postUpdate(Requests\Backend\CMS\ContestRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model = $this->model->findOrFail($id);
      $img_name = $model->image;
      if (isset($inputs['image'])){
        $inputs['image'] = $this->handleUpload($request,$model,'image',[350,350]);
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
