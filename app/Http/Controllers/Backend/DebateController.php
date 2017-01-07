<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Peserta;
use App\Models\Pendamping;
use Table;
use File;

class DebateController extends WebarqController
{
  public function __construct(Peserta $model, Pendamping $trans)
  {
    parent::__construct();
    $this->model = $model;
    $this->trans = $trans;
    $this->type  = 'debate';
    $this->view  = 'backend.debate.';
  }
  public function getData()
  {
    $model = $this->model->select('id','team','name','email','hp','school','photo','status')
      ->where('category','=',$this->type)
      ->orderBy('team','desc');

    $table = Table::of($model)
    ->addColumn('status', function($model){
      return $this->cek_status($model->status,$model->id);
    })
    ->addColumn('photo', function($model){
      return \Html::image('contents/'.$model->photo,'Picture',array('height'=>100));
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
      'trans'=>$this->trans->all(),
      'category'=>$this->type,
    ]);
  }

  public function postCreate(Requests\Backend\SpeechRequest $request)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model;
      $inputs['photo'] = $this->handleUpload($request,$model,'photo',[300,400]);
      $inputs['id_card'] = $this->handleUpload($request,$model,'id_card',[600,400]);
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
      'trans'=>$this->trans->all(),
      'category'=>$this->type,
    ]);
  }

  public function postUpdate(Requests\Backend\SpeechRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model = $this->model->findOrFail($id);
      $img_name = $model->photo;
      if (isset($inputs['photo'])){
        $inputs['photo'] = $this->handleUpload($request,$model,'photo',[300,400]);
      }else{
        $inputs['photo'] = $img_name;
      }
      $img_name = $model->id_card;
      if (isset($inputs['id_card'])){
        $inputs['id_card'] = $this->handleUpload($request,$model,'id_card',[600,400]);
      }else{
        $inputs['id_card'] = $img_name;
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

  public function getVerify($id)
  {
    return view($this->view.'verify',[
      'model'=>$this->model->findOrFail($id),
    ]);
  }

  public function postVerify(Requests\Backend\VerifyRequest $request,$id)
  {
    try{
      $inputs = $request->all();
      $model  = $this->model->findOrFail($id);
      $this->model->where([
          ['category','=',$this->type],
          ['team','=',$model->team],
        ])->update(['status' => $inputs['status']]);
      return redirect(urlBackendAction('index'))->with('success', 'Data has been updated');
    }catch(\Exception $e){
      return redirect(urlBackendAction('index'))->with('info', $e->getMessage());
    }
  }

  public function getView($id)
  {
    $menu = injectModel('Menu');
    $model = $this->model->findOrFail($id);
    $pendamping = $this->trans->select('name')->where('id','=',$model->pendamping_id)->firstOrFail();
    return view($this->view.'view',compact('model','menu'),[
      'model'=>$model,
      'pendamping'=>$pendamping->name,
    ]);
  }

  public function getExport(){
    $model = $this->model->select('pesertas.id','team','pendampings.name AS pendamping','category','pesertas.name','email','pesertas.hp','pesertas.gender','address','postal_code','pesertas.birthplace','pesertas.birthdate','school','jurusan','sch_address')
      ->join('pendampings','pendampings.id','=','pesertas.pendamping_id')
      ->where('category','=',$this->type)
      ->get();
    $filename = 'Data-Peserta-'.ucwords($this->type).'-Hection-2017';
    $this->export_data($model,$filename);
  }

}
