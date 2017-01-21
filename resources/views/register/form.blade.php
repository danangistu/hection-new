<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hection 2017</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="{{ asset(null) }}frontend/register/css/form-elements.css">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="{{ url()->current() }}" method="post" class="f1" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    		<h3>HECTION 2017 Registration Form</h3>
                    		<p>isi form untuk mendaftar</p>
                    		@include('register.step')
                        @if($category !== 'debate')
                          @include('register.form_other')
                        @else
                          @include('register.form_debate')
                        @endif
                          <fieldset>
                            <h4>Input data pendamping:</h4>
                            <div class="form-group">
              			          <label class="sr-only" for="f1-first-name">Nama</label>
                              <input type="text" name="pendamping_name" placeholder="Nama" class="f1-first-name form-control" id="pendamping_name">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Jenis Kelamin</label>
                              <select name="pendamping_gender" class="form-control" id="pendamping_gender">
                                <option>-- Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>

                            <div class="form-group">
              			          <label class="sr-only" for="f1-first-name">NIP</label>
                              <input type="text" name="pendamping_nip" placeholder="NIP" class="f1-first-name form-control" id="pendamping_nip">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Nomor HP</label>
                              <input type="text" name="pendamping_hp" placeholder="Nomor HP" class="f1-first-name form-control" id="pendamping_hp">
                            </div>

                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>

                          </fieldset>

                          <fieldset>
                            <h4>Autentikasi :</h4>
                            <div class="form-group">
                              {!! app('captcha')->display(); !!}
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                          </fieldset>

                    	</form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Javascript -->
        <script src="{{ asset(null) }}frontend/register/js/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset(null) }}frontend/register/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/jquery.backstretch.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/retina-1.1.0.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/scripts.js"></script>
        <script>
          var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>
        <script>
          var loadFile2 = function(event) {
            var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>
        <script>
        $( function() {
          $( "#peserta_birthdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
        </script>
        <script>
        $( function() {
          $( "#pendamping_birthdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
        </script>
        <!--[if lt IE 10]>
            <script src="{{ asset(null) }}frontend/register/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
