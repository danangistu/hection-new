<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="author" content="WEBARQ ~ Muhamad Reza Abdu Rohim"/>
<meta name="keywords" content="WCMS Version 1.0.0"/>
<meta name="description" content="WCMS Version 1.0.0 Laravel 5.2"/>
<link type="text/css" href="{{ asset(null) }}backend/css/reset.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/main.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/jquery.alert.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/function.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/tabular-css.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/tab/style.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/dropdown.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ asset(null) }}backend/css/select2.css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset(null) }}backend/sweetalert/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset(null) }}backend/elfinder/css/elfinder.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset(null) }}backend/elfinder/css/elfinder_bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/js/jquery.alert.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/js/jquery.cookie.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/js/function.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/js/cms-scripting.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/js/app.js"></script>
<script src="{{ asset(null) }}backend/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset(null) }}backend/elfinder/js/elfinder.min.js"></script>
<script src="{{ asset(null) }}backend/ckeditor/ckeditor.js"></script>
<script src="{{ asset(null) }}backend/js/dropdown.js"></script>
<script src="{{ asset(null) }}backend/js/select2.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

<title>Hection Admin - {{ webarq::titleActionForm() }}</title>
</head>
<body>
<div id="wrapper">
    <div id="app_header">
        <div id="icon">HECTION Admin Panel</div>
        <div id="welcome-message">
            <div class="fl" id="message">
                Hello <span class="username"><a href="{{url('admin-cp/profile/index')}}">{{ getUser()->name }}</a>!</span>
            </div>
            <div class="fl" id="logout">
                <a href="{{ url('login/logout') }}"></a>
            </div>
        </div>
        <div id="inbox" class="hidden"></div>
        <div id="notification" class="hidden"></div>
        <div class="clear break1"></div>
    </div>
    <div id="app_shorcut">
        <div>
            <div class="fl" style="margin:10px 0 0 30px;width: 230px;max-height: 120px;">
                <img src="{{ asset(null) }}backend/img/logo-client.png" style="width: 145px;"/>
            </div>
            <div class="clear break1"></div>
        </div>
    </div>
