@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/mensagem/mensagem-01.jpg" />
    </div>

    <span id="badgeHome" class="badge" v-show="badge" style="top: 370px; left: 160px;">@{{ badge }}</span>
    <a class="hiddenLink" style="top: 340px; left: 1px; height: 1000px; width: 980px;" href="{!! url('mensagem/02-mensagem') !!}"></a>
@stop
