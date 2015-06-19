<!DOCTYPE html>
<html>
    <head>
        <title>ALERJ</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="assets/css/main.css"/>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.1/vue.min.js"></script>
    </head>

    <body>
        <div id="application">
            <nav class="fixed-nav-bar">
                <img id="topbar" class="img-top-bar" src="assets/img/topbar.jpg" alt=""/>
            </nav>

            @yield('content')
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>jQuery.noConflict();</script>

        {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.6/zepto.min.js"></script>--}}
        {{--<script type="text/javascript" src="assets/packages/zepto-page-transitions/min/transition.min.js"></script>--}}
        <script src="assets/js/app.js"></script>
    </body>
</html>
