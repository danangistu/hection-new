<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;
use App\Models\Peserta;
use App\Models\Pendamping;
use DB;
use Mail;

class RegisterController extends WebarqController
{
  public function __construct(Peserta $model,Pendamping $trans)
  {
    parent::__construct();
    $this->model = $model;
    $this->trans = $trans;
  }
  public function index(){
    return view('frontend.register');
  }
  public function getForm(Request $request,$category){
    return view('register.form',[
      'category'=>$category,
    ]);
  }
  public function postForm(Request $request){
    $inputs = $request->all();
    $model = $this->model;
    try{
      DB::beginTransaction();
      $trans = $this->trans;
      $trans->name = $inputs['pendamping_name'];
      $trans->gender = $inputs['pendamping_gender'];
      $trans->nip = $inputs['pendamping_nip'];
      $trans->hp = $inputs['pendamping_hp'];
      $pendamping_id = $trans->save();

      $verification_code = str_random("5").'-hection-'.str_random("5");
      if($inputs['category'] !== 'debate'){
        $model = $this->model;
        $inputs['photo'] = $this->handleUpload($request,$model,'photo',[300,400]);
        $inputs['id_card'] = $this->handleUpload($request,$model,'id_card',[600,400]);
        $model->pendamping_id = $trans->id;
        $model->team = $this->model->select('team')->max('team')+1;
        $model->category = $inputs['category'];
        $model->name = $inputs['peserta_name'];
        $model->email = $inputs['peserta_email'];
        $model->hp = $inputs['peserta_hp'];
        $model->gender = $inputs['peserta_gender'];
        $model->address = $inputs['peserta_address'];
        $model->postal_code = $inputs['peserta_postal_code'];
        $model->birthplace = $inputs['peserta_birthplace'];
        $model->birthdate = $inputs['peserta_birthdate'];
        $model->school = $inputs['peserta_school'];
        $model->jurusan = $inputs['peserta_jurusan'];
        $model->sch_address = $inputs['peserta_sch_address'];
        $model->photo = $inputs['photo'];
        $model->id_card = $inputs['id_card'];
        $model->status = 'n';
        $model->verification_code = $verification_code;
        $model->save();
        $email =  $inputs['peserta_email'];
        Mail::send('register.email',[
            'name'     => $inputs['peserta_name'],
            'code'     => $verification_code,
            'category' => $inputs['category'],
          ],
        function($m) use($email){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject('Register Hection 2017');
            $m->to($email);
        });
      }else {
        $model = $this->model;
        $inputs['photo'] = $this->handleUpload($request,$model,'photo',[300,400]);
        $inputs['id_card'] = $this->handleUpload($request,$model,'id_card',[600,400]);
        $model->pendamping_id = $trans->id;
        $model->team = $this->model->select('team')->max('team')+1;
        $model->category = $inputs['category'];
        $model->name = $inputs['peserta_name'];
        $model->email = $inputs['peserta_email'];
        $model->hp = $inputs['peserta_hp'];
        $model->gender = $inputs['peserta_gender'];
        $model->address = $inputs['peserta_address'];
        $model->postal_code = $inputs['peserta_postal_code'];
        $model->birthplace = $inputs['peserta_birthplace'];
        $model->birthdate = $inputs['peserta_birthdate'];
        $model->school = $inputs['peserta_school'];
        $model->jurusan = $inputs['peserta_jurusan'];
        $model->sch_address = $inputs['peserta_sch_address'];
        $model->photo = $inputs['photo'];
        $model->id_card = $inputs['id_card'];
        $model->status = 'n';
        $model->verification_code = $verification_code;
        $model->save();

        $email =  $inputs['peserta_email'];
        Mail::send('register.email',[
            'name'     => $inputs['peserta_name']." - ".$inputs['peserta_name2']." - ".$inputs['peserta_name3'],
            'code'     => $verification_code,
            'category' => $inputs['category'],
          ],
        function($m) use($email){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject('Register Hection 2017');
            $m->to($email);
        });

        $model = $this->model;
        $inputs['photo2'] = $this->handleUpload($request,$model,'photo2',[300,400]);
        $inputs['id_card2'] = $this->handleUpload($request,$model,'id_card2',[600,400]);
        $model->pendamping_id = $trans->id;
        $model->team = $model->team;
        $model->category = $inputs['category'];
        $model->name = $inputs['peserta_name2'];
        $model->email = $inputs['peserta_email2'];
        $model->hp = $inputs['peserta_hp2'];
        $model->gender = $inputs['peserta_gender2'];
        $model->address = $inputs['peserta_address2'];
        $model->postal_code = $inputs['peserta_postal_code2'];
        $model->birthplace = $inputs['peserta_birthplace2'];
        $model->birthdate = $inputs['peserta_birthdate2'];
        $model->school = $inputs['peserta_school2'];
        $model->jurusan = $inputs['peserta_jurusan2'];
        $model->sch_address = $inputs['peserta_sch_address2'];
        $model->photo = $inputs['photo2'];
        $model->id_card = $inputs['id_card2'];
        $model->status = 'n';
        $model->verification_code = $verification_code;
        $model->save();

        $email =  $inputs['peserta_email2'];
        Mail::send('register.email',[
            'name'     => $inputs['peserta_name']." - ".$inputs['peserta_name2']." - ".$inputs['peserta_name3'],
            'code'     => $verification_code,
            'category' => $inputs['category'],
          ],
        function($m) use($email){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject('Register Hection 2017');
            $m->to($email);
        });

        $model = $this->model;
        $inputs['photo3'] = $this->handleUpload($request,$model,'photo3',[300,400]);
        $inputs['id_card3'] = $this->handleUpload($request,$model,'id_card3',[600,400]);
        $model->pendamping_id = $trans->id;
        $model->team = $model->team;
        $model->category = $inputs['category'];
        $model->name = $inputs['peserta_name3'];
        $model->email = $inputs['peserta_email3'];
        $model->hp = $inputs['peserta_hp3'];
        $model->gender = $inputs['peserta_gender3'];
        $model->address = $inputs['peserta_address3'];
        $model->postal_code = $inputs['peserta_postal_code3'];
        $model->birthplace = $inputs['peserta_birthplace3'];
        $model->birthdate = $inputs['peserta_birthdate3'];
        $model->school = $inputs['peserta_school3'];
        $model->jurusan = $inputs['peserta_jurusan3'];
        $model->sch_address = $inputs['peserta_sch_address3'];
        $model->photo = $inputs['photo3'];
        $model->id_card = $inputs['id_card3'];
        $model->status = 'n';
        $model->verification_code = $verification_code;
        $model->save();

        $email =  $inputs['peserta_email3'];
        Mail::send('register.email',[
            'name'     => $inputs['peserta_name']." - ".$inputs['peserta_name2']." - ".$inputs['peserta_name3'],
            'code'     => $verification_code,
            'category' => $inputs['category'],
          ],
        function($m) use($email){
            $m->from('no-reply@hection.com', 'HECTION 2017 ');
            $m->subject('Register Hection 2017');
            $m->to($email);
        });
      }


      DB::commit();

      return redirect('success');
    }catch(\Exception $e){
      DB::rollBack();
      return view('register.fail',[
        'error' => $e->getMessage(),
      ]);
    }
  }
}
