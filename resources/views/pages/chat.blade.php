@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/chat/chat_01.jpg" />
    </div>

    <a class="hiddenLink" style="top: 1050px; left: 380px; height: 230px; width: 220px;" href="{!! url('chat/message') !!}"></a>
@stop
