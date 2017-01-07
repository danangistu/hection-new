@extends('backend.layouts.layout')
@section('content')

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-12'>

                    <table class="table table-striped table-bordered">
                      <tr><td width="20%">ID</td><td>{{ $model->id }}</td><tr>
                      <tr><td>Nama</td><td>{{ $model->name }}</td><tr>
                      <tr><td>Jenis Kelamin</td><td>{{ $model->gender }}</td><tr>
                      <tr><td>NIP</td><td>{{ $model->nip }}</td><tr>
                      <tr><td>No HP</td><td>{{ $model->hp }}</td><tr>
                      <tr><td>Tempat Lahir</td><td>{{ $model->birthplace }}</td><tr>
                      <tr><td>Tanggal Lahir</td><td>{{ $model->birthdate }}</td><tr>
                      <tr><td>Jabatan</td><td>{{ $model->jabatan }}</td><tr>
                      <tr><td>Unit Kerja</td><td>{{ $model->uk }}</td><tr>
                      <tr><td>Alamat Unit Kerja</td><td>{!! $model->alamat_uk !!}</td><tr>
                      <tr><td>Alamat Rumah</td><td>{!! $model->alamat_rumah !!}</td><tr>
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection
