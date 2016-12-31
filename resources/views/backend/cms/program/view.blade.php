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
                      <tr><td>Day</td><td>{{ $model->day }}</td><tr>
                      <tr><td>Time</td><td>{{ $model->time }}</td><tr>
                      <tr><td>Program</td><td>{{ $model->program }}</td><tr>
                      <tr><td>Description</td><td><?php echo $model->description ?></td><tr>
                      <tr><td>Duration</td><td>{{ $model->duration }}</td><tr>
                      <tr><td>Place</td><td>{{ $model->place }}</td><tr>
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection
