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
                      <tr><td>Image</td><td><img src="{{ asset('contents/'.$model->image) }}" height="250" alt="image"></td><tr>
                      <tr><td>Title</td><td>{{ $model->title }}</td><tr>
                      <tr><td>Sub Title</td><td>{{ $model->sub_title }}</td><tr>
                      <tr><td>Description</td><td><?php echo $model->description ?></td><tr>
                      <tr><td>Order</td><td>{{ $model->order }}</td><tr>
                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection
