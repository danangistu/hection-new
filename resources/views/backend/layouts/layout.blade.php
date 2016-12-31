@include('backend.layouts.header')

    <div id="app_navigation">
        <link type="text/css" href="{{ asset(null) }}backend/css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="{{ asset(null) }}backend/js/script.js"></script>
            @include('backend.layouts.menu')
            @yield('content')
            <div id="app_footer">
                <div class="logo">Copyright &COPY; 2016 WEBARQ</div>
                <div class="clear"></div>
            </div>
        </div>
        </body>
@if(Session::has('infos'))
<script type="text/javascript">
    swal({
        type: 'warning',
        title : 'Warning',
        text : '{{ Session::get("infos") }}',
    });
</script>

@endif
@yield('script')
</html>