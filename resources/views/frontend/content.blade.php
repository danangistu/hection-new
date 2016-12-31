@extends('layouts.frontend')
@section('slider')
  @include('frontend.slider')
@endsection
@section('content')
<!-- HIGHLIGHT -->
  <section id="highlight">
    <div class="container-fluid">
        <div class="row">

            <div id="left" class="left col-lg-9 col-md-8 text-right">
                <h2>Register Now</h2>
                  <p>time left before big days</p>
              </div>

              <div id="right" class="col-lg-3 col-md-4 text-left">
                <div id="countdown"></div>
              </div>

          </div>
      </div>
  </section>

  <!-- INFO -->
  <section id="info">
      <div class="container">
          <div class="row">

              <div class="col-lg-12 text-center">
                  <h1>{{ $about->title }}</h1>
                  <p class="lead"><?php echo $about->about ?></p>
              </div>

              <div class="col-lg-10 col-lg-offset-1 col-md-12 text-center">
                  <div class="row">

                      <div class="feature col-lg-6 col-md-6 col-sm-6">
                          <i class="pe-4x pe-7s-refresh-2"></i>
                          <h4>{{ $about->pur_1 }}</h4>
                          <p>{{ $about->pur_text_1 }}</p>
                      </div>

                      <div class="feature col-lg-6 col-md-6 col-sm-6">
                          <i class="pe-4x pe-7s-micro"></i>
                          <h4>{{ $about->pur_2 }}</h4>
                          <p>{{ $about->pur_text_2 }}</p>
                      </div>

                  </div>
                  <div class="row">

                      <div class="feature col-lg-6 col-md-6 col-sm-6">
                          <i class="pe-4x pe-7s-headphones"></i>
                          <h4>{{ $about->pur_3 }}</h4>
                          <p>{{ $about->pur_text_3 }}</p>
                      </div>

                      <div class="feature col-lg-6 col-md-6 col-sm-6">
                          <i class="pe-4x pe-7s-headphones"></i>
                          <h4>{{ $about->pur_4 }}</h4>
                          <p>{{ $about->pur_text_4 }}</p>
                      </div>

                  </div>
              </div>

          </div>
      </div>
  </section>

  <!-- SPEAKERS -->
  <section id="contest">
      <div class="container">
          <div class="row">

              <div class="col-lg-12">
                  <h2 class="uppercase">Contest</h2>
                  <p class="lead">Here list of the contest</p>
              </div>

              <ul id="list-speaker" class="list-unstyled">
                @foreach($contests as $contest)
                  <li class="col-lg-3 col-md-3 col-sm-4">
                      <div class="speaker">
                          <figure class="effect-ming">
                              <img class="img-responsive" src="{{ asset($contest->picture) }}" alt=""/>
                              <figcaption>
                                  <span><a class="html-popup" href="{{ url('contest/'.$contest->id) }}"><img class="img-responsive" src="{{ asset('frontend/img/plus.png') }}" alt=""></a></span>
                              </figcaption>
                          </figure>

                          <div class="caption text-center">
                              <h4>{{ $contest->title }}</h4>
                          </div>
                      </div>
                  </li>
                @endforeach
              </ul>
              @if($count_contest > 4)
              <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a id="loadmore" class="button button-small button-line-dark">load more</a>
              </div>
              @endif
          </div>
      </div>
  </section>

  <!-- PROGRAM -->
  <section id="program">
      <div class="container">
          <div class="row">

              <div class="col-lg-12">

                  <h2 class="uppercase">PROGRAM</h2>
                  <p class="lead"></p>

                  <!-- SCHEDULE TAB -->
                  <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <?php $i=1; ?>
                    @foreach ($days as $day)
                      <li role="presentation" class="@if($i==1){{'active'}}@endif"><a href="{{ url('#'.str_slug($day->day)) }}" id="{{str_slug($day->day).'-tab'}}" role="tab" data-toggle="tab" aria-controls="day1" aria-expanded="true">{{ $day->day }}</a></li>
                      <?php $i++; ?>
                    @endforeach
                  </ul>

                  <!-- CONTENT -->
                  <div id="myTabContent" class="tab-content">
                    @foreach ($days as $day)
                      <!-- DAY 1 -->
                      <div role="tabpanel" class="tab-pane fade active in" id="{{ str_slug($day->day) }}" aria-labelledby="{{str_slug($day->day).'-tab'}}">
                          <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <?php $programs = App\Program::where('day_id','=',$day->id)->orderBy('id')->get(); ?>
                            @foreach ($programs as $program)
                              <!-- PROGRAM 1-->
                              <div class="panel panel-default">

                                  <!-- Program Heading -->
                                  <div class="panel-heading" role="tab" id="heading1">

                                      <div class="row">
                                          <div class="col-lg-1 col-md-1 col-sm-1">
                                          <p class="date">{{ $program->time }}</p>
                                          </div>

                                          <div class="col-lg-11 col-md-11 col-sm-11">

                                              <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="{{ url('#Program'.$program->id) }}" aria-expanded="true" aria-controls="Program1">
                                                    {{ $program->program }}
                                                  </a>
                                              </h4>
                                          </div>
                                      </div>

                                  </div>

                                  <div id="Program{{$program->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                      <!-- Program Content -->
                                      <div class="panel-body">
                                          <div class="row">

                                              <div class="col-lg-7 col-md-7 col-sm-10">
                                                  <p>{{ $program->description }}</p>

                                                  <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">{{ $program->duration }}</span></p>
                                                  <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">{{ $program->place }}</span></p>
                                              </div>

                                          </div>
                                      </div>

                                  </div>

                              </div>
                            @endforeach
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Prize -->
  <section id="download">
      <div class="container">
          <div class="row">

              <div class="col-lg-8 col-lg-offset-2">
                  <div class="row">

                      <div class="col-lg-4 col-md-4 col-sm-3">
                          <img class="img-responsive" src="{{ asset($prize->picture) }}" alt="">
                      </div>

                      <div class="col-lg-8 col-md-8 col-sm-9">
                          <h3>{{ $prize->title }}</h3>
                          <p><?php echo $prize->description ?></p>

                          <!-- <a class="button button-small button-line-dark" href="#">download pdf</a> -->
                      </div>

                  </div>
              </div>

          </div>
      </div>
  </section>

  <!-- VENUE -->
  <section id="venue">

      <div class="venue">
        <div class="venue-inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h2 class="uppercase">venue</h2>
                          <p class="lead"><?php echo $venue->description ?></p>
                      <h4>{{ $venue->place }}</h4>
                          <img class="img-responsive" src="{{ $venue->picture }}" alt="venue" height="150">
                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <i class="pe-4x pe-7s-map-2"></i>
                          <h4 class="uppercase">address</h4>
                          <p><?php echo $venue->address ?></p>

                          <!-- <a class="button button-xsmall button-line-light" href="">more information</a> -->
                      </div>

                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="row">

              <div class="col-lg-3 col-md-3">
                <h3>Our Last Event Winner</h3>
                  <p>Here are the winners of Hection 2016</p>
              </div>

              <div class="col-lg-9 col-md-9">

                  <!-- hotel carousel -->
                  <div id="hotel-carousel">
                    @foreach($winners as $winner)
                      <div class="item">
                        <div class="hotel">
                            <img class="img-responsive" src="{{ asset($winner->picture) }}" alt="">
                              <div class="caption">
                                <h5 class="uppercase">{{ $winner->school }}</h5>
                                  <p class="small">{{ $winner->title }}</p>
                                  <a class="button button-xsmall button-line-dark html-popup" href="{{ url('winner/'.$winner->id) }}">details</a>
                              </div>
                          </div>
                      </div>
                    @endforeach
                  </div>

              </div>

          </div>
      </div>

  </section>

  <!-- REGISTER -->
  <section id="register">
      <div class="container">
          <div class="row">

            <div class="col-lg-12">
                <h2 class="uppercase text-center">register</h2>
                <p class="lead text-center">The procedure for registration contained in the guidelines. You can download guidelines and registration form at the following link:</p>
            </div>

            <div class="col-lg-12 text-center">
              <a class="button button-small button-line-dark" href="">download guideline</a>
              <a class="button button-small button-line-dark html-popup" href="{{ url('register') }}">register now</a>
            </div>

          </div>
      </div>
  </section>

  <!-- GALLERY -->
  <section id="gallery">
      <div class="container">
          <div class="row">

              <div class="col-lg-12">
                  <h2 class="uppercase">gallery</h2>
                  <p class="lead">Our Last Event Documentation</p>

                  <div id="timeline" data-columns>
                    @foreach($galleries as $gallery)
                      <div class="item wrap">
                          <img class="img-responsive" src="{{ asset($gallery->picture) }}" alt="">
                          <div class="overlay"></div>
                          <div class="icon">
                              <a class="image-popup" href="{{ asset($gallery->picture) }}" title="<h4>{{ $gallery->title }}</h4>{{ $gallery->description }}"><i class="pe-3x pe-7s-plus"></i></a>
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>

          </div>
      </div>
  </section>

  <!-- TESTIMONIAL -->
  <section id="testimonial">
      <div class="container-fluid">
          <div class="row">

              <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 no-padding">
                  <div class="testimonial-inner">
                      <h2 class="hidden">testimonial</h2>

                      <div id="testimonial-carousel">
                        @foreach($testimonials as $testimonial)
                          <div class="item">
                              <img class="img-circle" src="{{ asset($testimonial->picture) }}" alt="">
                              <p class="lead"><?php echo $testimonial->testimonial; ?></p>
                              <p class="name"><big>{{ $testimonial->name }}</big> - <small>{{ $testimonial->role }}</small></p>
                          </div>
                        @endforeach
                      </div>
                   </div>
              </div>

          </div>
      </div>
  </section>

  <!-- SPONSORS -->
  <section id="sponsors">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="uppercase">sponsors</h2>
                  <p class="lead">Hection 2017 is powered by :</p>

                  <div id="sponsors-carousel">
                    @foreach($sponsors as $sponsor)
                      <div class="sponsor">
                          <a href="http://{{ $sponsor->link }}"><img class="img-responsive" src="{{ asset($sponsor->picture) }}" alt="{{ $sponsor->name }}"></a>
                      </div>
                    @endforeach
                  </div>

              </div>
          </div>
      </div>
  </section>

  <!-- google map -->
<div id="gmap_canvas"></div>
@endsection
