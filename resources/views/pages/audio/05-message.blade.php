@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/audio_05.jpg" />
    </div>

    <a class="hiddenLink" style="top: 190px; left: 40px; height: 75px; width: 70px;" v-on="click: back()"></a>
    <a class="hiddenLink" style="top: 550px; left: 0px; height: 900px; width: 980px;" href="{!! url('audio/06-write') !!}"></a>
    <a class="hiddenLink" style="top: 1520px; left: 180px; height: 170px; width: 620px;" href="{!! url('audio/07-thankyou') !!}"></a>
@stop
