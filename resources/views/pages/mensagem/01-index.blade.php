@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div class="background">
        <img class="main" src="/assets/img/mensagem/mensagem-01.jpg" />
    </div>

    <input
        id="ex1"
        data-slider-id='ex1Slider'
        type="text"
        data-slider-min="0"
        data-slider-max="200"
        data-slider-step="1"
        data-slider-value="14"
        data-slider-handle="custom"
    />
@stop

@section('javascript')
    jQuery('#ex1').slider({});
@stop
