@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\VerifyRequest') !!}

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-12'>
                  @include('backend.common.errors')
                  <table class="table table-striped table-bordered">
                    <tr><td width="30%">Foto</td><td><img src="{{ asset('contents/'.$model->photo) }}" height="200"></td><tr>
                    <tr><td>Nama</td><td>{{ $model->name }}</td><tr>
                    <tr><td>Email</td><td>{{ $model->email }}</td><tr>
                    <tr><td>No HP</td><td>{{ $model->hp }}</td><tr>
                    <tr><td>Jumlah di bayar</td><td>Rp. 100.000,00</td><tr>
                    @if($model->slip !== '')
                      <tr><td>Bukti Bayar</td><td><img src="{{ asset('contents/'.$model->slip) }}" height="500"></td><tr>
                    @else
                      <tr><td>Bukti Bayar</td><td>Belum di upload.</td><tr>
                    @endif
                    {!! Form::model($model) !!}
                    @if($model->status == 'y')
                      {!! Form::hidden('status' , 'n' ) !!}
                    @else
                      {!! Form::hidden('status' , 'y' ) !!}
                    @endif
                    <tr>
                      <td>Keterangan</td>
                      <td>{!! Form::textarea('keterangan' , null ,['class' => 'form-control','rows'=>'2']) !!}</td>
                    <tr>
                    <tr>
                      <td>Action</td>
                      <td>
                        @if( $model->status == 'y')
                          <button type="submit" class="btn btn-primary btn-danger"><span class='glyphicon glyphicon-remove'></span> Cancel Verification</button>
                        @else
                          <button type="submit" class="btn btn-primary btn-success"><span class='glyphicon glyphicon-check'></span> Verify</button>
                        @endif
                      </td>
                    </tr>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>
@endsection
