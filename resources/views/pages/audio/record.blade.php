@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/GravacaoAudio_02.jpg" />
    </div>

    <a class="hiddenLink" style="top: 650px; left: 320px; height: 300px; width: 340px;" href="{!! url('audio/paused') !!}"></a>
@stop
