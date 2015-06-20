@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/chat/chat_03.jpg" />
    </div>

    <a class="hiddenLink" style="top: 195px; left: 40px; height: 70px; width: 90px;" href="{!! url('chat/message') !!}"></a>
@stop
