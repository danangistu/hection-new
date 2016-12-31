@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\CMS\ProgramRequest') !!}

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user"> {{ webarq::titleActionForm() }}</h3>
    </div>
        <div id="content_body">

            <div class = 'row'>

                <div class = 'col-md-6'>

                    @include('backend.common.errors')

                     {!! Form::model($model) !!}

                     <div class="form-group">
                       <label>Day</label>
                       <select name="day_id" class="form-control">
                         <option value="">--Select Day--</option>
                         @foreach($days as $day)
                         <option value="{{ $day->id }}" @if(isset($model->id)) @if($model->day_id == $day->id) {{"selected='selected'"}} @endif @endif>{{ $day->day }}</option>
                         @endforeach
                       </select>
                     </div>

                     <div class="form-group">
                       <label>Time</label>
                       {!! Form::text('time' , null ,['class' => 'form-control','placeholder'=>'00:00']) !!}
                     </div>

                      <div class="form-group">
                        <label>Program</label>
                        {!! Form::text('program' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        {!! Form::textarea('description' , null ,['class' => 'form-control','id'=>'description']) !!}
                      </div>

                      <div class="form-group">
                        <label>Duration (Min)</label>
                        {!! Form::number('duration' , null ,['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                        <label>Place</label>
                        {!! Form::text('place' , null ,['class' => 'form-control']) !!}
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
