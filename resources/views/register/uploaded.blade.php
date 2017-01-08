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
                      <form role="form" class="f1">
                    		<h3>BUKTI PEMBAYARAN BERHASIL DIUPLOAD</h3>
                    		<p>Kami akan melakukan verifikasi pembayaran anda. Kami akan menghubungi anda setelah pembayaran dinyatakan valid.</p><br><br>
                        <a href="{{ url('/') }}" class="btn btn-lg btn-primary"> Back to Website</a>
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
        <!--[if lt IE 10]>
            <script src="{{ asset(null) }}frontend/register/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
