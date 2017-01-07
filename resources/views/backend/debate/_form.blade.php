@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\DebateRequest') !!}

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-6'>

                    @include('backend.common.errors')

                     {!! Form::model($model,['files'=>true]) !!}
                     {!! Form::hidden('category' , $category ) !!}
                     {!! Form::hidden('keterangan' , 'Registered by Admin' ) !!}

                     <div class="form-group">
                       <label>Nomor Team (Peserta dengan nomor sama adalah satu team)</label>
                       {!! Form::number('team' , null ,['class' => 'form-control','placeholder'=>'x']) !!}
                     </div>

                     <div class="form-group">
                       <label>Pendamping</label>
                       <select name='pendamping_id' class='form-control'>
                         <option>-- Pilih Pendamping --</option>
                         @foreach($trans as $select)
                            @if($model->id == null)
                              <option value="{{ $select->id }}">{{ $select->name }}</option>
                            @else
                              <option value="{{ $select->id }}" @if($model->pendamping_id == $select->id) {{ "selected='selected'" }} @endif>{{ $select->name }}</option>
                            @endif
                         @endforeach
                       </select>
                     </div>

                     <div class="form-group">
                       <label>Status</label>
                       {!! Form::select('status' , ['n' => 'Not Verified','y'=>'Verified'] , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Nama</label>
                       {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Email</label>
                       {!! Form::text('email' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>No HP</label>
                       {!! Form::text('hp' , null ,['class' => 'form-control']) !!}
                     </div>

                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        {!! Form::select('gender' , ['L' => 'Laki-laki','P'=>'Perempuan'] , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Alamat</label>
                        {!! Form::textarea('address' , null ,['class' => 'form-control','rows'=>'2']) !!}
                      </div>

                      <div class="form-group">
                        <label>Kode Pos</label>
                        {!! Form::text('postal_code' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        {!! Form::text('birthplace' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        {!! Form::date('birthdate' , null ,['class' => 'form-control','id'=>'birthdate']) !!}
                      </div>

                      <div class="form-group">
                        <label>Sekolah</label>
                        {!! Form::text('school' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Jurusan</label>
                        {!! Form::text('jurusan' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Alamat Sekolah</label>
                        {!! Form::textarea('sch_address' , null ,['class' => 'form-control','rows'=>'2']) !!}
                      </div>

                      <div class="form-group">
                        <label>Photo</label>
                        @if(isset($model->photo))<p><img src="{{ url('contents/'.$model->photo) }}" height="200"></p>@endif
                        {!! Form::file('photo' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Scan ID (KTP/Kartu Pelajar/SIM)</label>
                        @if(isset($model->id_card))<p><img src="{{ url('contents/'.$model->id_card) }}" height="200"></p>@endif
                        {!! Form::file('id_card' , null ,['class' => 'form-control']) !!}
                      </div>

                      <button type="submit" class="btn btn-primary">{{ !empty($model->id) ? 'Update' : 'Save' }}</button>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    window.onload = function()
    {
      CKEDITOR.replace( 'description',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
    }
</script>
<script type="text/javascript">
  $('select').select2();
</script>
@endsection
