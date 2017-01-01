@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\CMS\SponsorRequest') !!}

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
                       <label>Upload File</label>
                       @if(isset($model->file)){!! Form::text('file' , null ,['class' => 'form-control','disabled']) !!}@endif
                       {!! Form::file('file' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Button Name</label>
                       {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Type</label>
                       {!! Form::select('type' , ['standart' => 'Standart','important'=>'Important'] , null ,['class' => 'form-control']) !!}
                     </div>

                      <div class="form-group">
                        <label>Order</label>
                        {!! Form::number('order' , null ,['class' => 'form-control']) !!}
                      </div>

                      <button type="submit" class="btn btn-primary">{{ !empty($model->id) ? 'Update' : 'Save' }}</button>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection
