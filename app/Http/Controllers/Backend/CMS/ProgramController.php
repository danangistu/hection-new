<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Program;
use App\Models\Day;
use Table;

class ProgramController extends WebarqController
{
  public function __construct(Program $model, Day $day)
  {
    parent::__construct();
    $this->model = $model;
    $this->day   = $day;
    $this->view  = 'backend.cms.Program.';
  }

  public function getData()
  {
    $model = $this->model->select('programs.id','day_id','time','program','description','duration','place','day')
    ->join('days', 'days.id', '=', 'programs.day_id');

    $table = Table::of($model)
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
      'days'=>$this->day->all(),
    ]);
  }

  public function postCreate(Requests\Backend\CMS\ProgramRequest $request)
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
      'days'=>$this->day->all(),
    ]);
  }

  public function postUpdate(Requests\Backend\CMS\ProgramRequest $request,$id)
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
    $model = $this->model->select('programs.id','day_id','time','program','description','duration','place','day')
    ->join('days', 'days.id', '=', 'programs.day_id')
    ->first();
    return view($this->view.'view',compact('model','menu'),[
      'model'=>$model,
    ]);
  }
}
