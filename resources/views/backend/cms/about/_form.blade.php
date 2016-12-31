@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\CMS\AboutRequest') !!}

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-8'>

                    @include('backend.common.errors')
                    @include('backend.common.flashes')

                     {!! Form::model($model) !!}

                     <div class="form-group">
                       <label>Title</label>
                       {!! Form::text('title' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>About</label>
                       {!! Form::textarea('about' , null ,['class' => 'form-control','id'=>'about']) !!}
                     </div>

                      <div class="form-group">
                        <label>Purpose Title 1</label>
                        {!! Form::text('pur_1' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Description 1</label>
                        {!! Form::textarea('pur_text_1' , null ,['class' => 'form-control','id'=>'pur_text_1']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Title 2</label>
                        {!! Form::text('pur_2' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Description 2</label>
                        {!! Form::textarea('pur_text_2' , null ,['class' => 'form-control','id'=>'pur_text_2']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Title 3</label>
                        {!! Form::text('pur_3' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Description 3</label>
                        {!! Form::textarea('pur_text_3' , null ,['class' => 'form-control','id'=>'pur_text_3']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Title 4</label>
                        {!! Form::text('pur_4' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Purpose Description 4</label>
                        {!! Form::textarea('pur_text_4' , null ,['class' => 'form-control','id'=>'pur_text_4']) !!}
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
      CKEDITOR.replace( 'about',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
      CKEDITOR.replace( 'pur_text_1',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
      CKEDITOR.replace( 'pur_text_2',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
      CKEDITOR.replace( 'pur_text_3',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
      CKEDITOR.replace( 'pur_text_4',{
        filebrowserBrowseUrl: '{{ urlBackend("image/lib")}}'});
    }
</script>
@endsection
