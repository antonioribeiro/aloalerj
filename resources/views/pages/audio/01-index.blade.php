@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/audio/audio_01.jpg" />
    </div>

    <a class="hiddenLink" style="top: 200px; left: 860px; height: 80px; width: 80px;" href="{!! url('mensagem/01-index') !!}"></a>
    <a class="hiddenLink" style="top: 650px; left: 320px; height: 300px; width: 340px;" href="{!! url('audio/02-record') !!}"></a>
@stop
