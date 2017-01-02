<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Newsletter;
use App\Models\Broadcast;
use Table;
use Mail;
class BroadcastController extends WebarqController
{
  public function __construct(Broadcast $model,Newsletter $news)
  {
    parent::__construct();
    $this->model = $model;
    $this->news  = $news;
    $this->view = 'backend.newsletter.broadcast.';
  }

  public function getData()
  {
    $model = $this->model->select('id','subject','message','created_at')->orderBy('id','desc');

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
    ]);
  }

  public function postCreate(Requests\Backend\BroadcastRequest $request)
  {
    try{
      $newsl = $this->news->all();
      $inputs = $request->all();
      foreach($newsl as $news){
        $email = $news->email;
        $subject = $inputs['subject'];
        $message = $inputs['message'];
        Mail::send($this->view.'email',['message'=> $message],
        function($m) use($email,$subject){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject($subject);
            $m->to($email);
        });

      }
      $model = $this->model;
      return $this->save($model,$inputs);
    }catch(\Exception $e){
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
}
