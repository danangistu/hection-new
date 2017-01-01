@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\CMS\PrizeRequest') !!}

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-6'>

                    @include('backend.common.errors')
                    @include('backend.common.flashes')

                     {!! Form::model($model,['files'=>true]) !!}
                     <div class="form-group">
                       <label>Image Prize</label>
                       @if(isset($model->image))<p><img src="{{ url('contents/'.$model->image) }}" height="200"></p>@endif
                       {!! Form::file('image' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Title</label>
                       {!! Form::text('title' , null ,['class' => 'form-control']) !!}
                     </div>

                      <div class="form-group">
                        <label>Description</label>
                        {!! Form::textarea('description' , null ,['class' => 'form-control','id'=>'description']) !!}
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
