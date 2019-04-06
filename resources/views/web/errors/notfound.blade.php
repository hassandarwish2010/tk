@extends('layouts.layout')

@section('meta')
  <meta name="description" content="TKDesign,tk,design">
  <meta name="keywords" content="TKDesign,tk,design">

  <meta property="og:title" content="TKDesign"/>



@endsection
@section('content')
<section id="home" class="divider fullscreen bg-lightest">
  <div class="display-table text-center">
    <div class="display-table-cell">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="font-150 text-theme-colored mt-0 mb-0"><i class="fa fa-map-signs text-gray-silver"></i>404!</h1>
            <h2 class="mt-0">{{ __('lang.page_not_found') }}</h2>
            <p>{{ __('lang.page_not_found_details') }}</p>
            <a class="btn btn-border btn-gray btn-transparent btn-circled" href="{{ route('landing') }}">{{ __('lang.return_home') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
