@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <img class="main" src="/assets/img/home.jpg"/>

    <div class="link" id="home-logo" v-on="click: onClick"></div>

    <a class="link" id="home-loupe" href="{!! url('find') !!}"></a>
    <a class="link" id="home-menu"></a>
    <a class="link" id="home-alo" href="{!! url('find') !!}"></a>
    <a class="link" id="home-phone" href="{!! url('aloalerj') !!}"></a>
    <a class="link" id="home-chat"></a>
    <a class="link" id="home-audio"></a>
    <a class="link" id="home-video"></a>
    <a class="link" id="home-photo"></a>
    <a class="link" id="home-file"></a>
    <a class="link" id="home-messages"></a>
    <a class="link" id="home-news"></a>
    <a class="link" id="home-ordem"></a>
    <a class="link" id="home-tv"></a>
    <a class="link" id="home-laws"></a>
    <a class="link" id="home-alerj"></a>
    <a class="link" id="home-transparency"></a>
@stop
