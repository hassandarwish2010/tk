@extends('layouts.layout')


@section('title')
  {{$product->en_name}}
@endsection


@section('meta')
    <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $product->description)) }}">
    <meta name="keywords" content="{{ $product->keywords }}">

    <meta property="og:title" content="{{ $product->en_name }}"/>

    <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $product->description)) }}"/>


@endsection


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

                <a class="fancybox" rel="group" href="{{ $product->full_image }}">
                <img src="{{ $product->image3}}" class="img-responsive" alt="{{ $product->en_name}}">
                </a>

              </div>
              <div class="date-box">
                {{-- <div class="day">{{$news->day}}</div>
                <div class="month">{{$news->month}}</div> --}}
              </div>
              <div class="post-text page-content">
                {{-- <h3 class="single-title">{{$product->en_name}}</h3> --}}
               
              </div>
            </div>
          </li>
        </ul>
<!-- //LEAVE A COMMENT -->
      @if(count($images)>0)
      @foreach($images as $img)
       <ul class="blog-list">
          <li class="single">
            <div class="post-content">
              <div class="post-image">

                <a class="fancybox" rel="group" href="{{ asset('public/uploads/thumbs/'.$img->image) }}">
                <img src="{{ asset('public/uploads/thumbs/'.$img->image) }}" class="img-responsive" alt="">
                </a>

              </div>
              <div class="date-box">
                {{-- <div class="day">{{$news->day}}</div>
                <div class="month">{{$news->month}}</div> --}}
              </div>
              <div class="post-text page-content">
                {{-- <h3 class="single-title">{{$product->en_name}}</h3> --}}
               
              </div>
            </div>
          </li>
        </ul>
        @endforeach
      @endif


      </div>

      <div class="col-md-4">
        <div id="sidebar" class="sidebar">

          <div id="recent-posts-2" class="widget widget_recent_entries">
            <h4>{{ $product->en_name }}</h4><div class="small-border"></div>
        <p>{!! $product->en_details !!}</p>
          </div>


        </div>
      </div>

    </div>
  </div>
</div>



  {{--==================================--}}
@endsection
