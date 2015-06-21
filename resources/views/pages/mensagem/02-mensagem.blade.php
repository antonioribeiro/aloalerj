@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/mensagem/mensagem-02.jpg" />
    </div>

    <a class="hiddenLink" style="top: 20px; left: 40px; height: 75px; width: 70px;" v-on="click: back()"></a>
    <a class="hiddenLink" style="top: 200px; left: 1px; height: 1550px; width: 980px;" href="{!! url('mensagem/03-text') !!}"></a>
@stop

@section('javascript')
    hideHeader();
@stop
