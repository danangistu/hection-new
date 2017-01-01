@extends('backend.layouts.layout')
@section('content')
{!! JsValidator::formRequest('App\Http\Requests\Backend\Setting\ConfigRequest') !!}

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
                       <label>Image Logo (120x53)</label>
                       @if(isset($model->image))<p><img src="{{ url('contents/'.$model->image) }}" height="53"></p>@endif
                       {!! Form::file('image' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Email</label>
                       {!! Form::text('email' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Facebook</label>
                       {!! Form::text('facebook' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Twitter</label>
                       {!! Form::text('twitter' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Instagram</label>
                       {!! Form::text('instagram' , null ,['class' => 'form-control']) !!}
                     </div>

                      <button type="submit" class="btn btn-primary">{{ !empty($model->id) ? 'Update' : 'Save' }}</button>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection
