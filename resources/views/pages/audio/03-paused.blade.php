@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/audio_03.jpg" />
    </div>

    <a class="hiddenLink" style="top: 650px; left: 320px; height: 300px; width: 340px;" v-on="click: back()"></a>
    <a class="hiddenLink" style="top: 1520px; left: 180px; height: 170px; width: 620px;" href="{!! url('audio/04-kind') !!}"></a>
@stop
