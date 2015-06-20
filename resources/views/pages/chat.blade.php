@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/chat/chat_01.jpg" />
    </div>

    <a class="hiddenLink" id="disque-aloalerj" style="top: 180px; left: 0px; height: 160px; width: 980px;" href="{!! url('disque/aloalerj') !!}"></a>
@stop
