@extends('layouts.layout')
@section('title')
  {{$news->en_title}}
@endsection
@section('meta')
  <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $news->description)) }}">
  <meta name="keywords" content="{{ $news->keywords }}">

  <meta property="og:title" content="{{ $news->en_name }}"/>

  <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $news->description)) }}"/>


@endsection
@php


$about=App\About::orderBy('id','asc')->first();

@endphp





@section('content')

{{--====================================--}}
<div id="content">
  <div class="container">
    <div class="row">


      <div class="col-md-8">

        <ul class="blog-list">
          <li class="single">
            <div class="post-content">
              <div class="post-image">

                <a class="fancybox" rel="group" href="{{ $news->full_image }}">
                <img src="{{ $news->full_image }}" class="img-responsive" alt="{{$news->en_title}}">
                </a>

              </div>
              <div class="date-box">
                <div class="day">{{$news->day}}</div>
                <div class="month">{{$news->month}}</div>
              </div>
              <div class="post-text page-content">
                <h3 class="single-title">{{$news->en_title}}</h3>
                {!! $news->en_details !!}
              </div>
            </div>
          </li>
        </ul>
<!-- //LEAVE A COMMENT -->



      </div>

      <div class="col-md-4">
        <div id="sidebar" class="sidebar">

          <div id="recent-posts-2" class="widget widget_recent_entries">
            <h4>Recent Posts</h4><div class="small-border"></div>
            <ul>
              @foreach($resentNews as $resent)
                <li>
                  <a href="{{ route('new', [ 'permalink' => $resent->permalink]) }}">{{$resent->en_title}}</a>
                </li>
              @endforeach
            </ul>
          </div>
          <div id="text-2" class="widget widget_text">
            <h4>About Us</h4><div class="small-border"></div>
            <div class="textwidget">
              <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($about->en_details),408)) }}</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>


@endsection
