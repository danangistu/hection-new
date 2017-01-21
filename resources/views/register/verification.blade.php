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
                    		<h3>Verifikasi Pembayaran Pendaftaran Hection 2017</h3>
                        <p>Nama peserta : {{ $model->name }}</p>
                    		<p>Email : {{ $model->email }}</p>

                    		<fieldset>
                          <div class="form-group">
                            <label for="f1-first-name">Upload Bukti Pembayaran</label><br/>
                            <img id="output2" height="200"/>
                            <input type="file" name="slip" class="f1-first-name form-control" accept="image/*" onchange="loadFile2(event)" id="slip">
                          </div>

                          <div class="f1-buttons">
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
          var loadFile2 = function(event) {
            var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>
        <!--[if lt IE 10]>
            <script src="{{ asset(null) }}frontend/register/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
