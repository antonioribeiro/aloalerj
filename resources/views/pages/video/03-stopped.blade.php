@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/video/video_03.jpg" />
    </div>

    <a class="hiddenLink" style="top: 30px; left: 30px; height: 90px; width: 70px;" v-on="click: back()"></a>

    <a class="hiddenLink" style="top: 1620px; left: 30px; height: 110px; width: 110px;" href="{!! url('video/04-gallery') !!}"></a>
    <a class="hiddenLink" style="top: 1620px; left: 850px; height: 110px; width: 110px;" href="{!! url('video/05-kind') !!}"></a>
@stop

@section('javascript')
    hideHeader();
@stop
