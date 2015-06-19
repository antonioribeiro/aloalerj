@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div id="imagemap">
        <img class="main" src="/assets/img/aloalerj.jpg" usemap="#links"/>

        <map name="links">
            <area shape="rect" coords="0,  0,640,180" href="/disque/aloalerj">
            <area shape="rect" coords="0,180,640,298" href="/disque/crianca">
            <area shape="rect" coords="0,298,640,416" href="/disque/mulher">
            <area shape="rect" coords="0,416,640,534" href="/disque/ambiental">
        </map>
    </div>
@stop
