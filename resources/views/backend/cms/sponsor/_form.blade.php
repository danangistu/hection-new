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
                       <label>Image Sponsor (200x100)</label>
                       @if(isset($model->image))<p><img src="{{ url('contents/'.$model->image) }}" height="200"></p>@endif
                       {!! Form::file('image' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Name</label>
                       {!! Form::text('name' , null ,['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group">
                       <label>Link</label>
                       {!! Form::text('link' , null ,['class' => 'form-control','placeholder'=>'http://www.address.domain']) !!}
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
