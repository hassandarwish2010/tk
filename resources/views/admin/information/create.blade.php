@extends('admin.layouts.layout')

@section('title','add new category')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ __('lang.add_new') }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('information.index') }}">information</a></li>
        <li class="active">add new</li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
        <div class="row adminform">
          <h3 class="box-title m-b-0">add new</h3>
          <form class="form-full-width" action="{{ route('information.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin/information/form')
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
