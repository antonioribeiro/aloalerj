@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/chat/chat_02.jpg" />
    </div>

    <a class="hiddenLink" style="top: 20px; left: 445px; height: 60px; width: 90px;" href="{!! url('chat/messageWithHeader') !!}"></a>
@stop

@section('javascript')
    console.log('header');
    hideHeader();
@stop
