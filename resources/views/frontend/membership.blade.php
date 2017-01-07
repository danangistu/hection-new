@extends('layouts.frontend')
@section('content')
<!-- VENUE -->
<section id="venue">

    <div class="venue" style="background-image: url({{ asset('contents/'.$venue->banner) }})">
      <div class="venue-inner">
          <div class="container">
              <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-8">
                      <!-- <h2 class="uppercase">venue</h2> -->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <!-- <i class="pe-4x pe-7s-map-2"></i> -->
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

            </div>

        </div>
    </div>

</section>

@endsection
