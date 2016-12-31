<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

        <title>Hection 2017</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="_token" content="{{ csrf_token() }}" />
        <meta name="description" content="Hection">
		    <meta property="og:type" content="website">
		    <meta property="og:url" content="{{ Request::url() }}">
		    <meta name="twitter:url" content="{{ Request::url() }}">
		    <meta name="og:title" content="@yield('title')" >
		    <meta name="twitter:title" content="@yield('title')">
		    <meta name="description" property="og:description" content="@yield('description')">
		    <meta name="twitter:description" content="@yield('description')">
        <!-- viewport settings -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


        <!-- CSS -->
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/bootstrap.css')) }}">

        <link rel="stylesheet" href="{{ url(elixir('frontend/css/pe-icon-7-stroke.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/helper.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/animate.min.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/font-awesome.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/font.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/salvattore.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/jquery.countdown.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/magnific-popup.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/jquery.mCustomScrollbar.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/owl.carousel.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/owl.theme.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/owl.transitions.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/revolution.css')) }}">
        <link rel="stylesheet" href="{{ url(elixir('frontend/css/revolution-extralayers.css')) }}">

        <link rel="stylesheet" href="{{ url(elixir('frontend/css/main.css')) }}">


        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">


	</head>

	<body>
  <!-- PRELOADING -->
  <div id="preload">
    <div class="preload">
        <div class="spinner"></div>
      </div>
  </div>

  @include('frontend.navigation')
  @yield('slider')
  @yield('content')
  @include('frontend.footer')

  <script src="{{ url(elixir('frontend/js/jquery-1.11.1.min.js')) }}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="{{ url(elixir('frontend/js/jquery.themepunch.tools.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.themepunch.revolution.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/bootstrap.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.sticky.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.magnific-popup.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/salvattore.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.countdown.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.mCustomScrollbar.concat.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/waypoints.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/jquery.counterup.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/owl.carousel.min.js')) }}"></script>
  <script src="{{ url(elixir('frontend/js/retina.js')) }}"></script>

  <script src="{{ url('frontend/js/main.js') }}"></script>

  <!-- GOOGLE ANALYTICS -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3788027-10', 'themecube.net');
  ga('send', 'pageview');

  </script>
	<script>
	    @if(!empty(Config::get('settings')->analytics_id))
	        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	        ga('create', '{{ Config::get('settings')->analytics_id }}', 'auto');
	        ga('send', 'pageview');
	    @endif
	    @if(!empty(Config::get('settings')->disqus_shortname))
	        var disqus_shortname = '{{ Config::get('settings')->disqus_shortname }}',
	            disqus_config = function () {
	                this.language = "{{ session('language_code') }}";
	            };
	        (function() {
	            var d = document, s = d.createElement('script');
	            s.src = '//'+ disqus_shortname + '.disqus.com/embed.js';
	            s.setAttribute('data-timestamp', +new Date());
	            (d.head || d.body).appendChild(s);
	        })();
	    @endif
	</script>

  </body>
</html>
