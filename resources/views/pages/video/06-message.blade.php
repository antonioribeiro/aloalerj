@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/video/video_06.jpg" />
    </div>

    <a class="hiddenLink" style="top: 40px; left: 40px; height: 75px; width: 70px;" v-on="click: back()"></a>
    <a class="hiddenLink" style="top: 30px; left: 830px; height: 110px; width: 110px;" href="{!! url('video/07-thankyou') !!}"></a>
@stop

@section('javascript')
    hideHeader();
@stop
