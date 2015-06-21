@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/mensagem/mensagem-03.jpg" />
    </div>

    <a class="hiddenLink" style="top: 20px; left: 40px; height: 75px; width: 70px;" v-on="click: back()"></a>
@stop

@section('javascript')
    hideHeader();
@stop
