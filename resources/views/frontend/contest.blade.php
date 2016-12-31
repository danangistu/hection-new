
<div class="container">
	<div class="row">
        <div id="speaker-detail" class="col-lg-10 col-lg-offset-1">
            <div class="row">
            	<button title="Close (Esc)" type="button" class="mfp-close">X</button>

                <div class="col-md-5 col-lg-5 no-padding">
                    <img class="img-responsive" src="{{ asset($con->picture) }}" alt="" />
                </div>

                <div class="col-md-7 col-lg-7">
                    <h2>{{ $con->title }}</h2>
                    <p class="lead">{{ $con->sub_title }}</p>
                    <div id="content">
                      <p><?php echo $con->content;  ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
