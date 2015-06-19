@extends('layout')

@section('content')
    {{--<div class="spinner">--}}
        {{--<i class="fa fa-spinner fa-pulse"></i>--}}
    {{--</div>--}}

    <div id="imagemap">
        <img class="main" src="/assets/img/aloalerj.jpg" usemap="links"/>

        <map name="links">
            <area shape="rect" coords="110,110,82,126" href="sun.htm" alt="Sun">
            <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
            <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">
        </map>
    </div>
@stop
