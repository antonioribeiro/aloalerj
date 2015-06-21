@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <img class="main" src="/assets/img/home.jpg"/>

    <a class="hiddenLink" id="home-alo" href="{!! url('find') !!}" style="top: 300px; left: 137px; height: 490px; width: 735px;" ></a>
    <a class="hiddenLink" id="home-phone" href="{!! url('aloalerj') !!}" style="top: 1052px; left: 20px; height: 107px; width: 107px;" ></a>
    <a class="hiddenLink" id="home-chat" href="{!! url('chat') !!}" style="top: 1052px; left: 153px; height: 107px; width: 107px;" ></a>
    <a class="hiddenLink" id="home-audio" href="{!! url('audio/01-index') !!}" style="top: 1052px; left: 286px; height: 107px; width: 107px;" ></a>
    <a class="hiddenLink" id="home-video" href="{!! url('video/01-index') !!}" style="top: 1052px; left: 419px; height: 107px; width: 107px;"></a>
    <a class="hiddenLink" id="home-photo" style="top: 1052px; left: 553px; height: 107px; width: 107px;"></a>
    <a class="hiddenLink" id="home-file" style="top: 1052px; left: 686px; height: 107px; width: 107px;"></a>
    <a class="hiddenLink" id="home-messages" style="top: 1052px; left: 839px; height: 107px; width: 107px;">
        <span id="badgeHome" class="badge" style="top: -40px; left: 45px;">@{{ badge }}</span>
    </a>
    <a class="hiddenLink" id="home-news" style="top: 1242px; left: 0px; height: 413px; width: 981px;"></a>
    <a class="hiddenLink" id="home-ordem" style="top: 1750px; left: 0px; height: 314px; width: 490px;"></a>
    <a class="hiddenLink" id="home-tv" style="top: 1750px; left: 490px; height: 314px; width: 490px;"></a>
    <a class="hiddenLink" id="home-transparency" style="top: 2080px; left: 0px; height: 314px; width: 981px;"></a>
    <a class="hiddenLink" id="home-laws" style="top: 2410px; left: 0px; height: 334px; width: 490px;"></a>
    <a class="hiddenLink" id="home-alerj" style="top: 2410px; left: 490px; height: 334px; width: 490px;"></a>


@stop
