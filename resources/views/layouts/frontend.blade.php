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
        <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.css') }}">

        <link rel="stylesheet" href="{{ url('frontend/css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/helper.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/font.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/salvattore.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/jquery.countdown.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/revolution.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/revolution-extralayers.css') }}">

        <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


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

  <script src="{{ url('frontend/js/jquery-1.11.1.min.js') }}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD6FPuTbVzE_9HN0inacgb4XUKcaXvEnnc"></script>
  <script src="{{ url('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.sticky.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('frontend/js/salvattore.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.countdown.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ url('frontend/js/waypoints.min.js') }}"></script>
  <script src="{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('frontend/js/retina.js') }}"></script>

  <script src="{{ url('frontend/js/main.js') }}"></script>
	<script>
    var popupSize = {
        width: 780,
        height: 550
    };
    $(document).on('click', '#social-buttons', function(e){
        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);
        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });
		</script>

  <!-- GOOGLE ANALYTICS -->
  <!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3788027-10', 'themecube.net');
  ga('send', 'pageview');

  </script> -->
	<!-- <script>
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
	</script> -->

  </body>
</html>
