@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\PendampingRequest') !!}

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

                     <div class="form-group">
                       <label>Nama</label>
                       {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                     </div>

                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        {!! Form::select('gender' , ['L' => 'Laki-laki','P'=>'Perempuan'] , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Nip</label>
                        {!! Form::text('nip' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Nomor HP</label>
                        {!! Form::number('hp' , null ,['class' => 'form-control','maxlength'=>'13']) !!}
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
                        <label>Jabatan</label>
                        {!! Form::text('jabatan' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Unit Kerja</label>
                        {!! Form::text('uk' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Alamat Unit Kerja</label>
                        {!! Form::textarea('alamat_uk' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Alamat Rumah</label>
                        {!! Form::textarea('alamat_rumah' , null ,['class' => 'form-control']) !!}
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
@endsection
