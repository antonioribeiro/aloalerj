@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/video/video_01.jpg" />
    </div>

    <a class="hiddenLink" style="top: 1550px; left: 420px; height: 180px; width: 140px;" href="{!! url('video/02-recording') !!}"></a>
    <a class="hiddenLink" style="top: 1550px; left: 820px; height: 180px; width: 140px;" href="{!! url('video/04-gallery') !!}"></a>
@stop

@section('javascript')
    hideHeader();
@stop
