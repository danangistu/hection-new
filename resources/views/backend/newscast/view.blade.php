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
                      <tr><td>Kategori Lomba</td><td>{{ $model->category }}</td><tr>
                      <tr><td>Pendamping</td><td>{{ $pendamping }}</td><tr>
                      <tr><td>Nama</td><td>{{ $model->name }}</td><tr>
                      <tr><td>Email</td><td>{{ $model->email }}</td><tr>
                      <tr><td>No HP</td><td>{{ $model->hp }}</td><tr>
                      <tr><td>Jenis Kelamin</td><td>{{ $model->gender }}</td><tr>
                      <tr><td>Alamat </td><td>{!! $model->address !!}</td><tr>
                      <tr><td>Kode Pos</td><td>{{ $model->postal_code }}</td><tr>
                      <tr><td>Tempat Lahir</td><td>{{ $model->birthplace }}</td><tr>
                      <tr><td>Tanggal Lahir</td><td>{{ $model->birthdate }}</td><tr>
                      <tr><td>Sekolah</td><td>{{ $model->school }}</td><tr>
                      <tr><td>Jurusan</td><td>{{ $model->jurusan }}</td><tr>
                      <tr><td>Alamat Sekolah</td><td>{!! $model->sch_address !!}</td><tr>
                      <tr><td>Foto</td><td><img src="{{ asset('contents/'.$model->photo) }}" height="200"></td><tr>
                      <tr><td>ID Pengenal</td><td><img src="{{ asset('contents/'.$model->id_card) }}" height="200"></td><tr>
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection
