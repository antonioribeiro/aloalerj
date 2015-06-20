@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <img class="main" src="{!! url('/assets/img/disque/consumidor.jpg') !!}" />

    <div class="hiddenLink" id="disque-aloalerj" style="top: 180px; left: 10px; height: 160px; width: 100px;" v-on="click: back()"></div>
@stop
