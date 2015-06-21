<!DOCTYPE html>
<html>
    <head>
        <title>Alô Alerj</title>

        <meta name="animated" content="{{ session('animated', 'false') }}">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/main.css"/>

        <link rel="apple-touch-icon" href="/assets/img/icons/icon/ios/Icon-72@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="50x50" href="/assets/img/icons/icon/ios/Icon-Small-50.png" />
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/img/icons/icon/ios/Icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/img/icons/icon/ios/Icon-60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/icons/icon/ios/Icon-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="100x100" href="/assets/img/icons/icon/ios/Icon-Small-50@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/icons/icon/ios/Icon@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/icons/icon/ios/Icon-72@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="512x512" href="/assets/img/icons/icon/ios/iTunesArtwork.png" />
        <link rel="apple-touch-icon-precomposed" sizes="1024x1024" href="/assets/img/icons/icon/ios/iTunesArtwork@2x.png" />

        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icons/icon/ios/Icon-32.png">

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.1/vue.min.js"></script>
    </head>

    <body>
        <div id="application">
            <div class="shadow">
                <div id="header" class="header">
                    <img id="topbar" class="img-top-bar" src="/assets/img/topbar.jpg" alt=""/>
                    <a class="hiddenLink" style="top: 25px; left: 40px; height: 120px; width: 350px;" href="{!! url('/') !!}"></a>
                    <div class="hiddenLink" v-on="click: toggleDebug" style="top: 25px; left: 480px; height: 120px; width: 150px;"></div>
                    <a class="hiddenLink" style="top: 45px; left: 705px; height: 90px; width: 97px;" href="{!! url('find') !!}"></a>
                    <a class="hiddenLink" style="top: 45px; left: 842px; height: 93px; width: 94px;"></a>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>jQuery.noConflict();</script>

        <script src="/assets/js/app.js"></script>

        <script>
            @yield('javascript')

            if ({!! env('APP_DEBUG') == null ? 'false' : env('APP_DEBUG') !!})
            {
                toggleDebug();
            }
        </script>

    </body>
</html>
