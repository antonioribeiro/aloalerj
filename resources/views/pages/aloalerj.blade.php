@extends('layout')

@section('content')
    <div class="spinner">
        <i class="fa fa-spinner fa-pulse"></i>
    </div>

    <div id="imagemap">
        <img class="main" src="/assets/img/aloalerj.jpg" usemap="#links"/>

        <map name="links">
            <area shape="rect" coords="3,3,638,104" href="/disque/aloalerj">
            <area shape="rect" coords="4,108,637,209" href="/disque/crianca">
        </map>
    </div>
@stop
