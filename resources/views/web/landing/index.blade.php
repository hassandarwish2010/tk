@extends('layouts.layout')
@section('title')
Home
@endsection


@section('meta')
    <meta name="description" content="{{ $setting->description}}">
    <meta name="keywords" content="{{ $setting->keywords }}">

    <meta property="og:title" content="الرئيسية"/>
    <meta property="og:description" content="{{ $setting->description}}"/>

    <meta name="author" content="Typical Design">
@endsection
@section('content')
    @include('layouts.slider')
    @include('layouts.category')
    @include('layouts.bafter')
    @include('layouts.informations')
    @include('layouts.projects')

    @include('layouts.blog')


    {{--@include('layouts.informations')--}}
    @include('layouts.discover')
    @include('layouts.gitform')
    @include('layouts.progress')
@endsection
