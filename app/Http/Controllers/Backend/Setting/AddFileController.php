<?php

namespace App\Http\Controllers\Backend\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\AddFile;
use Table;
use File;

class AddFileController extends WebarqController
{
  public function __construct(AddFile $model)
  {
    parent::__construct();
    $this->model = $model;
    $this->view = 'backend.setting.addfile.';
  }

  public function getData()
  {
    $model = $this->model->select('id','file','name','type','order')->orderBy('order');

    $table = Table::of($model)
    ->addColumn('file', function($model){
      return \Html::link('contents/file/'.$model->file);
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

  public function postCreate(Requests\Backend\Setting\AddFileRequest $request)
  {
    try{
      $inputs = $request->all();
      $model = $this->model;
      $inputs['file']=$this->upload_file($inputs,$model,$request,'file');
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

  public function postUpdate(Requests\Backend\Setting\AddFileRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model = $this->model->findOrFail($id);
      $filename = $model->file;
      if (isset($inputs['file'])){
        $inputs['file']=$this->upload_file($inputs,$model,$request,'file');
      }else{
        $inputs['file'] = $filename;
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
