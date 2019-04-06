@extends('layouts.layout')
@section('title')
  Blog
@endsection
@php
 
$about=App\About::orderBy('id','asc')->first();
@endphp

@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection

@section('content')
{{--<section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">--}}
  {{--<div class="container pt-60 pb-60">--}}
    {{--<!-- Section Content -->--}}
    {{--<div class="section-content">--}}
      {{--<div class="row">--}}
        {{--<div class="col-md-12 xs-text-center">--}}
          {{--<h3 class="title text-white">{{ __('lang.news') }}</h3>--}}
          {{--<ol class="breadcrumb mt-10 white">--}}
            {{--<li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>--}}
            {{--<li class="active text-theme-colored">{{ __('lang.news') }}</li>--}}
          {{--</ol>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</section>--}}

{{--<!-- Section: Upcoming Events -->--}}
{{--<section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('public/web/template/images/bg/bg2.jpg') }}">--}}
  {{--<div class="container pb-50 pt-80">--}}
    {{--<div class="section-content">--}}
      {{--<div class="row">--}}
        {{--@forelse($news as $new)--}}
          {{--<div class="col-sm-6 col-md-4 col-lg-4">--}}
          {{--<div class="schedule-box maxwidth500 bg-light mb-30 news-box">--}}
            {{--<div class="thumb">--}}
              {{--<img class="img-fullwidth" alt="{{ $new->$news_title }}" src="{{ $new->image }}">--}}
              {{--<div class="overlay">--}}
                {{--<a class="fancybox" rel="group" href="{{ $new->full_image }}"><i class="fa fa-image mr-5"></i></a>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="schedule-details clearfix p-15 pt-10">--}}
              {{--<h5 class="font-16 title"><a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">{{ $new->$news_title }}</a></h5>--}}
              {{--<ul class="list-inline font-11 mb-20">--}}
                {{--<li><i class="fa fa-calendar mr-5"></i>{{ $new->created_at }}</li>--}}
              {{--</ul>--}}
              {{--<p>{{ $new->$news_details }}</p>--}}
              {{--<div class="mt-10">--}}
               {{--<a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">{{ __('lang.read_more') }}</a>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--@empty--}}
        {{--<div class="col-sm-6 col-md-4 col-lg-4">--}}
          {{--<div class="schedule-box maxwidth500 bg-light mb-30 news-box">--}}
            {{--{{ __('lang.no_data') }}--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--@endforelse--}}

        {{--<div class="col-md-12">--}}
          {{--{{ $news->links() }}--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</section>--}}
{{--</div>--}}
<!-- end main-content -->
<!-- content begin -->
<div id="content">
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <ul class="blog-list">
          @foreach($news as $new )
          <li class= "wow fadeInUp">
            <div class="post-content">
              <div class="post-image">
                <a class="fancybox" rel="group" href="{{ $new->full_image }}">
                  <img src="{{ $new->full_image }}" alt="{{ $new->en_name }}">
                </a>
              </div>
              <div class="date-box">
                <div class="day">{{ $new->created_at->format('d') }}</div>
                <div class="month">{{ $new->month }}</div>
              </div>
              <div class="post-text">
                <h3><a href="{{ route('new', [ 'permalink' => $new->permalink]) }}">{{$new->en_title}}</a></h3>
                <p>{{$new->en_details}}</p>
              </div>
              <a href="{{ route('new', [ 'permalink' => $new->permalink]) }}" class="btn-more">Read More</a>
            </div>
          </li>
          @endforeach
        </ul>

        <div class="pagination text-center ">
          {{ $news->links() }}
        </div>
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
<!-- content close -->



@endsection
