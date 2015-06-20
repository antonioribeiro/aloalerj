@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/GravacaoAudio_05.jpg" />
    </div>

    <a class="hiddenLink" style="top: 1520px; left: 180px; height: 170px; width: 620px;" href="{!! url('audio/writing') !!}"></a>
@stop
