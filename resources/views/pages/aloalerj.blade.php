@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div id="imagemap">
        <img class="main" src="/assets/img/aloalerj.jpg" usemap="#links"/>

        <map name="links">
            <area shape="rect" coords="3,3,638,179" href="/disque/aloalerj">
            <area shape="rect" coords="4,180,637,360" href="/disque/crianca">
            <area shape="rect" coords="5,1436,637,1540" href="#">
            <area shape="rect" coords="3,1204,638,1316" href="#">
        </map>
    </div>
@stop
