<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Pendamping;
use App\Models\Peserta;
use Table;

class PendampingController extends WebarqController
{
  public function __construct(Pendamping $model, Peserta $peserta)
  {
    parent::__construct();
    $this->model = $model;
    $this->peserta = $peserta;
    $this->view = 'backend.pendamping.';
  }

  public function getData()
  {
    $model = $this->model->select('id','name','gender','nip','hp','birthplace','birthdate','jabatan','uk');

    $table = Table::of($model)
    ->addColumn('school',function($model){
      $row = $this->peserta->select('school')->where('pendamping_id','=',$model->id)->first();
      if(isset($row->school))
        return $row->school;
      else
        return $model->uk;

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

  public function postCreate(Requests\Backend\PendampingRequest $request)
  {
    try{
      $inputs = $request->all();
      $model = $this->model;
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

  public function postUpdate(Requests\Backend\PendampingRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model = $this->model->findOrFail($id);
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

  public function getExport(){
    $model = $this->model->select('id','name','gender','nip','hp','birthplace','birthdate','jabatan','uk','alamat_uk','alamat_rumah','created_at')->get();
    $filename = 'Data-Pendamping-Hection-2017';
    $this->export_data($model,$filename);
  }
}
