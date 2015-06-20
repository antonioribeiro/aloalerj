<!DOCTYPE html>
<html>
    <head>
        <title>ALERJ</title>

        <meta name="animated" content="{{ session('animated', 'false') }}">

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/main.css"/>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.1/vue.min.js"></script>
    </head>

    <body>
        <div id="application">
            <nav class="header">
                <img id="topbar" class="img-top-bar" src="/assets/img/topbar.jpg" alt=""/>
                <a class="hiddenLink" style="top: 25px; left: 40px; height: 120px; width: 350px;" href="{!! url('/') !!}"></a>
                <div class="hiddenLink" v-on="click: onClick" style="top: 25px; left: 480px; height: 120px; width: 150px;"></div>
                <a class="hiddenLink" style="top: 45px; left: 705px; height: 90px; width: 97px;" href="{!! url('find') !!}"></a>
                <a class="hiddenLink" style="top: 45px; left: 842px; height: 93px; width: 94px;"></a>
            </nav>

            <div class="content">
                @yield('content')
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>jQuery.noConflict();</script>

        {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.6/zepto.min.js"></script>--}}
        {{--<script type="text/javascript" src="assets/packages/zepto-page-transitions/min/transition.min.js"></script>--}}
        <script src="/assets/js/app.js"></script>

        <script>
            @yield('javascript')
        </script>

    </body>
</html>
