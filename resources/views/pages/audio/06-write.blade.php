@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/audio_06.jpg" />
    </div>

    <div class="hiddenLink" style="top: 15px; left: 40px; height: 70px; width: 70px;" v-on="click: back()"></div>
    <a class="hiddenLink" style="top: 15px; left: 730px; height: 70px; width: 240px;" href="{!! url('audio/07-thankyou') !!}"></a>
@stop

@section('javascript')
    console.log('header');
    hideHeader();
@stop
