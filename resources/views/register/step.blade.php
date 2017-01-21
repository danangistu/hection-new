@if($category !== 'debate')
<div class="f1-steps">
  <div class="f1-progress">
      <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
  </div>
  <div class="f1-step active">
    <div class="f1-step-icon"><i class="fa fa-users"></i></div>
    <p>Peserta</p>
  </div>
  <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
    <p>Pendamping</p>
  </div>
    <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
    <p>Autentikasi</p>
  </div>
</div>
@else
<div class="f1-steps">
  <div class="f1-progress">
      <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
  </div>
  <div class="f1-step active">
    <div class="f1-step-icon"><i class="fa fa-users"></i></div>
    <p>Peserta</p>
  </div>
  <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-users"></i></div>
    <p>Peserta 2</p>
  </div>
  <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-users"></i></div>
    <p>Peserta 3</p>
  </div>
  <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
    <p>Pendamping</p>
  </div>
    <div class="f1-step">
    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
    <p>Autentikasi</p>
  </div>
</div>
@endif
