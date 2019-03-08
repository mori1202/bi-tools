@extends('common.layout')
@section('addCss')
<link href="{{{asset('/assets/css/sample.css')}}}" rel="stylesheet">
@stop
@include('common.header')
@section('content')
<body style="background:aliceblue;">
    <h1>{{ $hoge }}</h1>
    @include('card.action')
@stop
@section('addJs')
<script type="text/javascript" src="{{{asset('/assets/js/sample.js')}}}"></script>
@stop
@include('common.footer')
