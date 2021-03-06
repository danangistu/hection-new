<!-- FOOTER -->
<footer id="footer">
  <div class="container">
      <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6">
              <h4 class="uppercase">{{ $about->title }}</h4>
                <p class="small">For more information, contact us via email : <br><a href="mailto:ukmpeccpolines@gmail.com">ukmpeccpolines@gmail.com</a><br><a href="mailto:info@hection.com">info@hection.com</a></p>
                <ul class="list-unstyled list-inline uppercase">
                  @if(!empty($config->facebook))
                    <li><a href="{{ $config->facebook }}"><i class="fa fa-lg fa-facebook"></i></a></li>
                  @endif
                  @if(!empty($config->twitter))
                    <li><a href="{{ $config->twitter }}"><i class="fa fa-lg fa-twitter"></i></a></li>
                  @endif
                  @if(!empty($config->instagram))
                    <li><a href="{{ $config->instagram }}"><i class="fa fa-lg fa-instagram"></i></a></li>
                  @endif
                  @if(!empty($config->email))
                    <li><a href="mailto:{{ $config->email }}"><i class="fa fa-lg fa-envelope"></i></a></li>
                  @endif
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <h4 class="uppercase">newsletter</h4>

                <div class="row">
                    <div class="col-lg-8">
                        <input type="email" id="newsletter_email">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="col-lg-4">
                        <button class="button button-big button-line-light" onclick="newsletter_send();">subscribe</button>
                    </div>
                </div>

                <p class="small">Get latest information about this event, subscribe now.</p>

            </div>

        </div>
    </div>
</footer>

<!-- SUBFOOTER -->
<div class="subfooter">
  <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <ul class="list-unstyled list-inline pull-right uppercase">
                    <li><a href="#">Copyright by UKM PECC | Politeknik Negeri Semarang</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
